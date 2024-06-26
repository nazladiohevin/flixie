<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    // protected $with = ['genre_detail'];

    // public function genre_detail(){
    //     return $this->hasMany(GenreDetail::class, "genre_id");
    // }
}
