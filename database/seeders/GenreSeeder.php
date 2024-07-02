<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $genres = [
            [
                'name' => 'Action',
                'description' => ''
            ],
            [
                'name' => 'Adventure',
                'description' => ''
            ],
            [
                'name' => 'Animation',
                'description' => ''
            ],
            [
                'name' => 'Comedy',
                'description' => ''
            ],
            [
                'name' => 'Crime',
                'description' => ''
            ],
            [
                'name' => 'Documentary',
                'description' => ''
            ],
            [
                'name' => 'Drama',
                'description' => ''
            ],
            [
                'name' => 'Family',
                'description' => ''
            ],
            [
                'name' => 'Fantasy',
                'description' => ''
            ],
            [
                'name' => 'History',
                'description' => ''
            ],
            [
                'name' => 'Horror',
                'description' => ''
            ],
            [
                'name' => 'Music',
                'description' => ''
            ],
            [
                'name' => 'Mystery',
                'description' => ''
            ],
            [
                'name' => 'Romance',
                'description' => ''
            ],
            [
                'name' => 'Science Fiction',
                'description' => ''
            ],
            [
                'name' => 'TV Movie',
                'description' => ''
            ],
            [
                'name' => 'Thriller',
                'description' => ''
            ],
            [
                'name' => 'War',
                'description' => ''
            ],
            [
                'name' => 'Western',
                'description' => ''
            ],
            [
                'name' => 'Action & Adventure',
                'description' => ''
            ],
            [
                'name' => 'Kids',
                'description' => ''
            ],
            [
                'name' => 'News',
                'description' => ''
            ],
            [
                'name' => 'Reality',
                'description' => ''
            ],
            [
                'name' => 'Sci-Fi & Fantasy',
                'description' => ''
            ],
            [
                'name' => 'Soap',
                'description' => ''
            ],
            [
                'name' => 'Talk',
                'description' => ''
            ],
            [
                'name' => 'War & Politics',
                'description' => ''
            ]
            ];        

        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}


