<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Film;
use App\Models\Season;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function content(Film $film)
    {
        // @dd($film);                
        
        $meanRating = $film->getMeanRating();        

        return view("film-detail", compact("film", "meanRating"));
    }

    public function play_movie(Film $film){        
        if ($film->film_category->name != "movie") {
            return back();
        }

        $meanRating = $film->getMeanRating(); 
        $latest_films = Film::latest()->take(3)->with(["season", "episode"])->get();        
        
        return view("play-film", compact(
            "film", "meanRating", "latest_films"            
        ));
 
    }

    public function play_tv(Film $film, $season, $episode){   
        
        if ($film->film_category->name != "tv") {
            return back();
        }

        $meanRating = $film->getMeanRating();        
        

        $latest_films = Film::latest()->take(3)->with(["season", "episode"])->get();        

        $episodeModel = new Episode();
        $episodes = $episodeModel->scopeListEpisodeSeason($film->id)
            ->orderBy("season")
            ->orderBy("episode")
            ->get();

        $episode = $episodeModel->scopeEpisodeSeason($film->id, $season, $episode)->first();
        // @dd($episode);
        
        return view("play-tv", compact(
            "film", "meanRating", "latest_films",
            "episodes", "episode"
        ));
    }
}
