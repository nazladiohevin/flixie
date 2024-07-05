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
        $film = $film->load([
            "genre", "genre_detail", "film_category", "artists", "episode", "season"
        ]);
        $meanRating = $film->getMeanRating();        

        $userId = auth()->check() ? auth()->user()->id : 0;
        $isPurchasedFilm = $film->purchased_films()->where("user_id", $userId)->exists();
        
        return view("film-detail", compact("film", "meanRating", "isPurchasedFilm"));
    }

    public function play_movie(Film $film){        
        if ($film->film_category->name != "movie") {
            return back();
        }

        $meanRating = $film->getMeanRating(); 
        $latest_films = Film::latest()
            ->whereHas('film_category', function($query) {
                $query->where('name', 'movie');
            })
            ->take(3)
            ->with(['film_category'])
            ->get();
        
        return view("play-film", compact(
            "film", "meanRating", "latest_films"            
        ));
 
    }

    public function play_tv(Film $film, $season, $episode){   
        
        if ($film->film_category->name != "tv") {
            return back();
        }

        $meanRating = $film->getMeanRating();        
        

        $latest_films = Film::latest()
            ->whereHas('film_category', function($query) {
                $query->where('name', 'tv');
            })
            ->take(3)
            ->with(['season', 'episode', 'film_category'])
            ->get();

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
