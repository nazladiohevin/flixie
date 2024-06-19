<?php

namespace Database\Seeders;

use App\Models\ArtistDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artistDetails = [
            [
                "artist_id" => 1,
                "film_id" => 5
            ],
            [
                "artist_id" => 2,
                "film_id" => 5
            ],
            [
                "artist_id" => 3,
                "film_id" => 3
            ],
            [
                "artist_id" => 4,
                "film_id" => 3
            ],
        ];

        foreach ($artistDetails as $artistDetail) {
            ArtistDetail::create($artistDetail);
        }
    }
}
