<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    /**
     * Scope a query to include episodes of a specific season and episode.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int|null $seasonId
     * @param int|null $episodeId
     * @param int $filmId
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeEpisodeSeason($filmId, $seasonId, $episodeId) {
        return 
            $this
                ->join('seasons', 'seasons.id', '=', 'episodes.season_id')
                ->where('episodes.film_id', $filmId)
                ->where('episodes.season_id', $seasonId)
                ->where('episodes.episode', $episodeId)
                ->select('seasons.*', 'episodes.*');
    }

    public function scopeListEpisodeSeason($filmId) {
        return 
            $this
                ->join('seasons', 'seasons.id', '=', 'episodes.season_id')
                ->where('episodes.film_id', $filmId)                
                ->select('seasons.*', 'episodes.*');
    }
}
