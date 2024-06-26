<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $films = Film::with("genre_detail")->get();  
        $films = Film::all();
        $filmsWithRatings = Film::withAverageRating()->get();
    

        return view("index", compact("films", "filmsWithRatings"));
    }
}
