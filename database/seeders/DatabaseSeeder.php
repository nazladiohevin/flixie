<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CommentSeeder::class,
            FilmSeeder::class,
            GenreSeeder::class,
            GenreDetailSeeder::class,
            EpisodeSeeder::class,
            SeasonSeeder::class,
            ArtistSeeder::class,
            ArtistDetailSeeder::class,
            FilmCategorySeeder::class
        ]);
    }
}
