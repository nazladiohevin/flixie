<?php

namespace Database\Seeders;

use App\Models\FilmCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filmCategories = [
            [
                "name" => "movie"
            ],
            [
                "name" => "tv"
            ]
        ];

        foreach ($filmCategories as $filmCategories) {
            FilmCategory::create($filmCategories);
        }
    }
}
