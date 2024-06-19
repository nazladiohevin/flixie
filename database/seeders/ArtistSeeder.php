<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    public function run(): void
    {
        $artists = [
            [
                "name" => "Junya Enoki",
                "character" => "Yuji Itadori",
                "image_path" => "vBnNL3Jqy0zkS3ZgsXZmvDM9Dfz.jpg"
            ],
            [
                "name" => "Yuichi Nakamura",
                "character" => "Satoru Gojo",
                "image_path" => "wb8behVKjBHX9XXrEydvNINCYwH.jpg"
            ],
            [
                "name" => "Rino Romano",
                "character" => "Bruce Wayne / The Batman",
                "image_path" => "52571ef3760ee3776a1e11dc"
            ],
            [
                "name" => "Danielle Judovits",
                "character" => "Barbra Gordan / Batgirl",
                "image_path" => "5ecdzR76eyTDcaTGfLOWNeksUi6.jpg"
            ],
        ];

        foreach ($artists as $artist) {
            Artist::create($artist);
        }
    }
}
