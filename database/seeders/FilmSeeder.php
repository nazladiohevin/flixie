<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    public function run(): void
    {
        $films = [
            [
                'film_category_id' => 2,
                'title' => 'House of the Dragon',
                'slug' => 'house-of-the-dragon',
                'description' => 'Seri prekuel menemukan dinasti Targaryen di puncak mutlak kekuatannya...',
                'production' => 'Targaryen Productions',
                'release_date' => '2022-08-21',
                'url_trailer' => '6T1GTnhiMiY',                
                'region' => 'english',
                'duration' => 1440,
                'poster' => 'https://media.themoviedb.org/t/p/w300_and_h450_bestv2/t9XkeE7HzOsdQcDDDapDYh8Rrmt.jpg',
                'banner' => 'xtAQ7j9Yd0j4Rjbvx1hW0ENpXjf.jpg',
                'is_free' => false,
                'price' => 85000,
                'rating' => 4
            ],
            [
                'film_category_id' => 1,
                'title' => 'IF',
                'slug' => 'if',
                'description' => 'A young girl who goes through a difficult experience begins to see everyone\'s imaginary friends...',
                'production' => 'IF Productions',
                'release_date' => '2024-05-08',
                'url_trailer' => 'mb2187ZQtBE',
                'url_vidio' => 'mb2187ZQtBE',
                'region' => 'english',
                'duration' => 9000,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BYWQ4OGI2MmQtZjUxMC00Njg2LWJiZTQtYmFmZjI5ZmI1Y2U1XkEyXkFqcGdeQXVyMTA1NjE5MTAz._V1_SX300.jpg',
                'banner' => 'nxxCPRGTzxUH8SFMrIsvMmdxHti.jpg',
                'is_free' => true,
                'price' => 0,
                'rating' => 5
            ],
            [
                'film_category_id' => 1,
                'title' => 'The Batman',
                'slug' => 'the-batman',
                'description' => 'In his second year of fighting crime, Batman uncovers corruption in Gotham City...',
                'production' => 'Wayne Enterprises',
                'release_date' => '2022-03-04',
                'url_trailer' => 'mqqft2x_Aa4',
                'url_vidio' => 'Cwcinb2OxUo',
                'region' => 'english',
                'duration' => 10560,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BM2MyNTAwZGEtNTAxNC00ODVjLTgzZjUtYmU0YjAzNmQyZDEwXkEyXkFqcGdeQXVyNDc2NTg3NzA@._V1_SX300.jpg',
                'banner' => 'tRS6jvPM9qPrrnx2KRp3ew96Yot.jpg',
                'is_free' => false,
                'price' => 50000,
                'rating' => 4
            ],
            [
                'film_category_id' => 1,
                'title' => 'The Matrix Resurrections',
                'slug' => 'the-matrix-resurrections',
                'description' => 'Return to a world of two realities: one, everyday life; the other, what lies behind it...',
                'production' => 'Matrix Productions',
                'release_date' => '2021-12-22',
                'url_trailer' => '9ix7TUGVYIo',
                'url_vidio' => 'KiKD6i_QRJI',
                'region' => 'english',
                'duration' => 8880,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BMGJkNDJlZWUtOGM1Ny00YjNkLThiM2QtY2ZjMzQxMTIxNWNmXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_SX300.jpg',
                'banner' => 's1FhMAr91WL8D5DeHOcuBELtiHJ.jpg',
                'is_free' => true,
                'price' => 0,
                'rating' => 4
            ],
            [
                'film_category_id' => 2,
                'title' => 'Jujutsu Kaisen',
                'slug' => 'jujutsu-kaisen',
                'description' => 'A boy swallows a cursed talisman - the finger of a demon - and becomes cursed himself. He enters a shaman`s school to be able to locate the demon`s other body parts and thus exorcise himself.',
                'production' => 'MAPPA',
                'release_date' => '2020-10-02',
                'url_trailer' => 'wNmS9RGI',
                'region' => 'japan',
                'duration' => 8880,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BNGY4MTg3NzgtMmFkZi00NTg5LWExMmEtMWI3YzI1ODdmMWQ1XkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_SX300.jpg',
                'banner' => 'gmECX1DvFgdUPjtio2zaL8BPYPu.jpg',
                'is_free' => true,
                'price' => 0,
                'rating' => 5
            ],
        ];

        foreach ($films as $film) {
            Film::create($film);
        }
    }
}
