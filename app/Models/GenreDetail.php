<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreDetail extends Model
{
    use HasFactory;


    protected $fillable = ['film_id', 'genre_id'];

    // protected $with = ['genre', "film"];

    // public function genre() {
    //     return $this->belongsTo(Genre::class);
    // }

    // public function film() {
    //     return $this->belongsTo(Film::class);
    // }
}
