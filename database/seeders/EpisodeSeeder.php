<?php

namespace Database\Seeders;

use App\Models\Episode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $episodes = [
            [
                "season_id" => 1,
                "film_id" => 1,
                "episode" => 1,
                "url_vidio" => "DotnJ7tTA34"
            ],
            [
                "season_id" => 1,
                "film_id" => 1,
                "episode" => 2,
                "url_vidio" => "DotnJ7tTA34"
            ],
            [
                "season_id" => 1,
                "film_id" => 1,
                "episode" => 3,
                "url_vidio" => "DotnJ7tTA34"
            ],
            [
                "season_id" => 2,
                "film_id" => 1,
                "episode" => 1,
                "url_vidio" => "YN2H_sKcmGw"
            ],
            [
                "season_id" => 3,
                "film_id" => 1,
                "episode" => 1,
                "url_vidio" => "csSaSrJJPRs"
            ],
            [
                "season_id" => 1,
                "film_id" => 5,
                "episode" => 1,
                "url_vidio" => "dTu64XyrXLM"
            ],
            [
                "season_id" => 1,
                "film_id" => 5,
                "episode" => 2,
                "url_vidio" => "dTu64XyrXLM"
            ],
            [
                "season_id" => 2,
                "film_id" => 5,
                "episode" => 1,
                "url_vidio" => "muSr2NVs1oM"
            ],
            [
                "season_id" => 2,
                "film_id" => 5,
                "episode" => 2,
                "url_vidio" => "muSr2NVs1oM"
            ],
        ];

        foreach ($episodes as $episode) {
            Episode::create($episode);
        }
    }
}
