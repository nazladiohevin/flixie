<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchasedFilm extends Model
{
    use HasFactory;
    
    protected $guarded = ["id"];
    protected $with = ["film"];
    
    public function film() {
        return $this->belongsTo(Film::class);
    }
    
    public static function scopeByUserIdAndFilmId($userId, $filmId) {
        return self::where("user_id", $userId)
            ->where("film_id", $filmId);
    }
}
