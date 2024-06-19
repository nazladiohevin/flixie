<?php

namespace Database\Seeders;

use App\Models\GenreDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genreDetails = [
            ['genre_id' => 1, 'film_id' => 1],
            ['genre_id' => 2, 'film_id' => 1],
            ['genre_id' => 3, 'film_id' => 1],
            ['genre_id' => 1, 'film_id' => 2],
            ['genre_id' => 4, 'film_id' => 2],
            ['genre_id' => 5, 'film_id' => 3],
            ['genre_id' => 1, 'film_id' => 3],
            ['genre_id' => 3, 'film_id' => 4],
            ['genre_id' => 5, 'film_id' => 4],
            ['genre_id' => 1, 'film_id' => 5],
            ['genre_id' => 2, 'film_id' => 5],
            ['genre_id' => 4, 'film_id' => 6],
            ['genre_id' => 1, 'film_id' => 6],
            ['genre_id' => 2, 'film_id' => 7],
            ['genre_id' => 3, 'film_id' => 7],
            ['genre_id' => 4, 'film_id' => 8],
            ['genre_id' => 1, 'film_id' => 8],
            ['genre_id' => 5, 'film_id' => 9],
            ['genre_id' => 1, 'film_id' => 9],
            ['genre_id' => 3, 'film_id' => 10],
            ['genre_id' => 4, 'film_id' => 10],
        ];

        foreach ($genreDetails as $genreDetail) {
            GenreDetail::create($genreDetail);
        }
    }
}
