<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Film extends Model
{
    use HasFactory;

    // protected $with = ['genre_detail', "genre", "film_category", "season", "episode", "purchased_films"];

    protected $guarded = ["id"];

    public function genre_detail() {
        return $this->hasMany(GenreDetail::class, "film_id");
    }

    public function genre() {
        return $this->belongsToMany(Genre::class, 'genre_details', 'film_id', 'genre_id');
    }

    public function film_category() {
        return $this->belongsTo(FilmCategory::class, "film_category_id");
    }

    public function artists() {
        return $this->hasMany(Artist::class, 'film_id');
    }

    public function comments() {
        return $this->hasMany(Comment::class, "film_id");
    }

    public function episode() {
        return $this->hasMany(Episode::class);
    }

    public function season() {
        return $this->belongsToMany(Season::class, 'episodes', 'film_id', 'season_id');
    }

    public function purchased_films() {
        return $this->hasMany(PurchasedFilm::class, "film_id", "id");
    }

    public function getMeanRating(){
        $totalRating = $this->comments()->sum("rating");
        $countRating = $this->comments()->count("rating");
        
        $meanRating = floor(($countRating != 0) ? ($totalRating / $countRating) : 0); 
        return $meanRating;
    }

    // Scope to get films with average rating
    public function scopeWithAverageRating($query)
    {
        return $query
            ->leftJoin('comments', 'comments.film_id', '=', 'films.id')
            ->select('films.*', DB::raw('COALESCE(AVG(comments.rating), 0) as meanRating'))
            ->groupBy('films.id');
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
