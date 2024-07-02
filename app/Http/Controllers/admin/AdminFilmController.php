<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Episode;
use App\Models\Film;
use App\Models\FilmCategory;
use App\Models\Genre;
use App\Models\GenreDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AdminFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::with(["genre", "film_category", "season"])->orderBy("created_at", "desc")->get();
        return view("admin.film.index", compact("films"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view("admin.film.create", compact("genres"));
    }

    private function getYoutubeVideoId($url) {
        $queryString = parse_url($url, PHP_URL_QUERY);
        parse_str($queryString, $params);
        return $params['v'] ?? null;
    }
    private function timeToSeconds($time) {
        list($hours, $minutes) = explode(':', $time);
        return $hours * 3600 + $minutes * 60;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {        
        $validatedData = $request->validate([
            "title" => "required|max:100",
            "film_category" => "required",
            "description" => "required|max:255",
            "production" => "required",
            "url_trailer" => "required",
            "url_vidio" => "required",
            "region" => "required",
            "duration" => "required",
            'poster' => 'required|image|mimes:jpeg,png,jpg,svg|max:4096',
            'banner' => 'required|image|mimes:jpeg,png,jpg,svg|max:4096',
            "is_free" => "required",
            "genres" => "required|array",
            "genres.*" => "string",
        ]);
    
        // ... Proses penyimpanan data jika validasi sukses ...        
        $slug = Str::slug($validatedData["title"], "-");
        $duration = $this->timeToSeconds($validatedData["duration"]);
        
        // Upload poster & banner
        if ($request->file('poster')) {
            $validatedData['poster'] = $request->file('poster')->store('images', "public");
        }

        if ($request->file('banner')) {
            $validatedData['banner'] = $request->file('banner')->store('images', "public");
        }

        // ambil key yt trailer & vidio
        $urlTrailerKey = $this->getYoutubeVideoId($validatedData["url_trailer"]);         
        $urlVidioKey = $this->getYoutubeVideoId($request->url_vidio);        

        $createdFilm = Film::create([
            "title" => $validatedData["title"],
            "slug" => $slug,
            "film_category_id" => (int) $validatedData["film_category"],
            "description" => $validatedData["description"],
            "production" => $validatedData["production"],
            "release_date" => now(),
            "production" => $validatedData["production"],
            "url_trailer" => $urlTrailerKey,
            "url_vidio" => (int)$validatedData["film_category"] == 2 ? null : $urlVidioKey, // jika kategori tv maka null kan, vidio diinputkan di tabel episode
            "region" => $validatedData["region"],
            "poster" => $validatedData["poster"],
            "banner" => $validatedData["banner"],
            "is_free" => (bool) $validatedData["is_free"],
            "duration" => $duration,
            "price" => $request->price,
            "rating" => 0
        ]);

        foreach ($validatedData["genres"] as $genre) {
            GenreDetail::create([
                "film_id" => $createdFilm->id,
                "genre_id" => (int) $genre
            ]);
        }
        
        // Hanya kategori tv yang boleh memasukkan episode        
        // Sekali buat langsung 1 episode dan 1 season saja yang dimasukkan
        if ((int) $validatedData["film_category"] == 2) {
            Episode::create([
                "season_id" => 1,
                "film_id" => $createdFilm->id,
                "episode" => 1,
                "url_vidio" => $urlVidioKey
            ]);
        }

        return redirect("/flixie-admin/dashboard/film")->with("success", "Berhasil menambahkan film");

    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {   
        $film->load("genre", "film_category");        
        $film_categories = FilmCategory::all();
        $genres = Genre::all();
        return view("admin.film.edit", compact("film", "film_categories", "genres"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        $rules = [
            "title" => "required|max:100",
            "film_category" => "required",
            "description" => "required|max:255",
            "production" => "required",
            "url_trailer" => "required",            
            "region" => "required",
            "duration" => "required",
            'poster' => 'image|mimes:jpeg,png,jpg,svg|max:4096',
            'banner' => 'image|mimes:jpeg,png,jpg,svg|max:4096',
            "is_free" => "required",
            "genres" => "required|array",
            "genres.*" => "string",
        ];
        $validatedData = $request->validate($rules);        
        
        // Upload file jika ada
        if ($request->file('poster')) {
            $posterPath = public_path('storage/' . $film->poster);
            if (File::exists($posterPath)) {
                File::delete($posterPath);
            }
            
            $validatedData['poster'] = $request->file('poster')->store('images', "public");
        }
        if ($request->file('banner')) {
            $bannerPath = public_path('storage/' . $film->banner);                
            if (File::exists($bannerPath)) {
                File::delete($bannerPath);
            }

            $validatedData['banner'] = $request->file('banner')->store('images', "public");
        }

        // Buat Slug       
        $slug = Str::slug($validatedData["title"], "-");
        // convert durasi ke second
        $duration = $this->timeToSeconds($validatedData["duration"]);

        // ambil key yt trailer & vidio
        $urlTrailerKey = $this->getYoutubeVideoId($validatedData["url_trailer"]); 
        if ($request->url_vidio) {
            $urlVidioKey = $this->getYoutubeVideoId($request->url_vidio);        
        }        

        $createdFilm = Film::where("id", $film->id)->update([
            "title" => $validatedData["title"],
            "slug" => $slug,
            "film_category_id" => (int) $validatedData["film_category"],
            "description" => $validatedData["description"],
            "production" => $validatedData["production"],                        
            "url_trailer" => $urlTrailerKey,
            "url_vidio" => (int)$validatedData["film_category"] == 2 ? null : $urlVidioKey, // jika kategori tv maka null kan, vidio diinputkan di tabel episode
            "region" => $validatedData["region"],
            "poster" => $request->file('poster') ? $validatedData["poster"] : $film->poster,
            "banner" => $request->file('banner') ? $validatedData["banner"] : $film->banner,
            "is_free" => (bool) $validatedData["is_free"],
            "duration" => $duration,
            "price" => (bool)$validatedData["is_free"] ? 0 : $request->price,
            "rating" => 0
        ]);


        // Hapus semua Genre detailnya dulu
        GenreDetail::where("film_id", $film->id)->delete();
        foreach ($validatedData["genres"] as $genre) {            
            GenreDetail::create([
                "film_id" => $film->id,
                "genre_id" => (int) $genre
            ]);
        }

        return redirect("/flixie-admin/dashboard/film")->with("success", "Berhasil mengedit film");        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {        
        Film::destroy($film->id);
        GenreDetail::where('film_id', $film->id)->delete();
        Episode::where("film_id", $film->id)->delete();
        // Hapus foto
        Storage::delete($film->poster);
        Storage::delete($film->banner);

        $posterPath = public_path('storage/' . $film->poster);
        $bannerPath = public_path('storage/' . $film->banner);

        if (File::exists($posterPath)) {
            File::delete($posterPath);
        }

        if (File::exists($bannerPath)) {
            File::delete($bannerPath);
        }

        return redirect('flixie-admin/dashboard/film')->with('success', 'Berhasil menghapus film ' . $film->name);
    }
}
