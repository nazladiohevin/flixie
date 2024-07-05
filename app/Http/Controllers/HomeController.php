<?php

namespace App\Http\Controllers;

use App\Models\Film;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {    
        // $films = Film::with("genre_detail")->get();  
        $userId = auth()->check() ? auth()->user()->id : 0;
        $limit = 12;
        $currentDate = \Carbon\Carbon::now()->toDateString();

        $loveFilm = Film::where("rating", ">=", 3)->limit($limit)->first();
        $favoriteFilms = Film::where("rating", ">=", 3)->limit($limit)->get();
        $latestFilms = Film::orderBy("created_at", "desc")->limit($limit)->get();
        $freeFilms = Film::where("is_free", 1)->limit($limit)->get();
        $upcomingTopFilm = Film::with(["genre"])->where("release_date", ">", $currentDate)->orderBy('release_date', 'desc')->first();
        $comingsoonFilms = Film::where("release_date", ">", $currentDate)->limit($limit)->orderBy('release_date', 'desc')->get();
        $tvFilms = Film::with(["film_category"])
            ->whereHas('film_category', function($query) {
                $query->where('name', 'tv');
            })
            ->limit($limit)
            ->get();
        
        return view("index", compact("loveFilm", "favoriteFilms", "latestFilms", "freeFilms", "upcomingTopFilm", "comingsoonFilms", "tvFilms"));
    }
}
