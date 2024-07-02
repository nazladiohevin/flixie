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


        $favoriteFilms = Film::where("rating", ">=", 3)->limit($limit)->get();
        $latestFilms = Film::orderBy("created_at", "desc")->limit($limit)->get();
        $freeFilms = Film::where("is_free", 1)->limit($limit)->get();
        $upcomingTopFilm = Film::with(["genre"])->where("release_date", ">", $currentDate)->orderBy('release_date', 'desc')->first();
        $comingsoonFilms = Film::where("release_date", ">", $currentDate)->limit($limit)->orderBy('release_date', 'desc')->get();
        $tvFilms = Film::with(["film_category"])->get();
        // @dd($tvFilms);
        return view("index", compact("favoriteFilms", "latestFilms", "freeFilms", "upcomingTopFilm", "comingsoonFilms", "tvFilms"));
    }
}
