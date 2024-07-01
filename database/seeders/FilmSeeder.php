<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    public function run(): void
    {
        $filmsCategory1 = [
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
                'title' => 'Inside Out 2',
                'slug' => 'inside-out-2',
                'description' => 'Teenager Riley\'s mind headquarters is undergoing a sudden demolition to make room for something entirely unexpected: new Emotions! Joy, Sadness, Anger, Fear and Disgust, who’ve long been running a successful operation by all accounts, aren’t sure how to feel when Anxiety shows up. And it looks like she’s not alone.',
                'production' => '', // Isi dengan informasi produksi jika tersedia
                'release_date' => '2024-06-11',
                'url_trailer' => '', // Isi dengan URL trailer jika tersedia
                'url_vidio' => '', // Isi dengan URL video jika tersedia
                'region' => 'english',
                'duration' => '', // Isi dengan durasi jika tersedia
                'poster' => 'https://image.tmdb.org/t/p/original/vpnVM9B6NMmQpWeZvzLvDESb2QY.jpg',
                'banner' => 'xg27NrXi7VXCGUr7MG75UqLl6Vg.jpg',
                'is_free' => false,
                'price' => 0,
                'rating' => 7.741
            ],
            [
                'film_category_id' => 1,
                'title' => 'Despicable Me 4',
                'slug' => 'despicable-me-4',
                'description' => 'Gru and Lucy and their girls — Margo, Edith and Agnes — welcome a new member to the Gru family, Gru Jr., who is intent on tormenting his dad. Gru faces a new nemesis in Maxime Le Mal and his femme fatale girlfriend Valentina, and the family is forced to go on the run.',
                'production' => '', // Isi dengan informasi produksi jika tersedia
                'release_date' => '2024-06-20',
                'url_trailer' => '', // Isi dengan URL trailer jika tersedia
                'url_vidio' => '', // Isi dengan URL video jika tersedia
                'region' => 'english',
                'duration' => '', // Isi dengan durasi jika tersedia
                'poster' => 'https://image.tmdb.org/t/p/original/wWba3TaojhK7NdycRhoQpsG0FaH.jpg',
                'banner' => 'fDmci71SMkfZM8RnCuXJVDPaSdE.jpg',
                'is_free' => false,
                'price' => 0,
                'rating' => 8.564
            ],
            [
                'film_category_id' => 1,
                'title' => 'A Quiet Place: Day One',
                'slug' => 'a-quiet-place-day-one',
                'description' => 'As New York City is invaded by alien creatures who hunt by sound, a woman named Sammy fights to survive.',
                'production' => '', // Isi dengan informasi produksi jika tersedia
                'release_date' => '2024-06-26',
                'url_trailer' => '', // Isi dengan URL trailer jika tersedia
                'url_vidio' => '', // Isi dengan URL video jika tersedia
                'region' => 'english',
                'duration' => '', // Isi dengan durasi jika tersedia
                'poster' => 'https://image.tmdb.org/t/p/original/yrpPYKijwdMHyTGIOd1iK1h0Xno.jpg',
                'banner' => '1XyIHrP7X7rn3UBkNy9hPb9vCUf.jpg',
                'is_free' => false,
                'price' => 0,
                'rating' => 7
            ],
            [
                'film_category_id' => 1,
                'title' => 'The Watchers',
                'slug' => 'the-watchers',
                'description' => 'A young artist gets stranded in an extensive, immaculate forest in western Ireland, where, after finding shelter, she becomes trapped alongside three strangers, stalked by mysterious creatures each night.',
                'production' => '', // Isi dengan informasi produksi jika tersedia
                'release_date' => '2024-06-06',
                'url_trailer' => '', // Isi dengan URL trailer jika tersedia
                'url_vidio' => '', // Isi dengan URL video jika tersedia
                'region' => 'english',
                'duration' => '', // Isi dengan durasi jika tersedia
                'poster' => 'https://image.tmdb.org/t/p/original/vZVEUPychdvZLrTNwWErr9xZFmu.jpg',
                'banner' => 'oZDRuGHhe5uY8wBqFJcJZT9kdvJ.jpg',
                'is_free' => false,
                'price' => 0,
                'rating' => 6.2
            ],
            [
                'film_category_id' => 1,
                'title' => 'The Garfield Movie',
                'slug' => 'the-garfield-movie',
                'description' => 'Garfield, the world-famous, Monday-hating, lasagna-loving indoor cat, is about to have a wild outdoor adventure! After an unexpected reunion with his long-lost father – scruffy street cat Vic – Garfield and his canine friend Odie are forced from their perfectly pampered life into joining Vic in a hilarious, high-stakes heist.',
                'production' => '', // Isi dengan informasi produksi jika tersedia
                'release_date' => '2024-04-30',
                'url_trailer' => '', // Isi dengan URL trailer jika tersedia
                'url_vidio' => '', // Isi dengan URL video jika tersedia
                'region' => 'english',
                'duration' => '', // Isi dengan durasi jika tersedia
                'poster' => 'https://image.tmdb.org/t/p/original/tSPsiMHb4edeBKZZjKDmhX18Jbs.jpg',
                'banner' => 'vWzJDjLPmycnQ42IppEjMpIhrhc.jpg',
                'is_free' => false,
                'price' => 0,
                'rating' => 6.758
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
            ]
        ];

        $filmsCategory2 = [
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
            [
                'film_category_id' => 2,
                'title' => 'The Boys',
                'slug' => 'the-boys',
                'description' => 'A group of vigilantes known informally as “The Boys” set out to take down corrupt superheroes with no more than blue-collar grit and a willingness to fight dirty.',
                'production' => '', // Isi dengan informasi produksi jika tersedia
                'release_date' => '2019-07-25',
                'url_trailer' => '', // Isi dengan URL trailer jika tersedia
                'url_vidio' => '', // Isi dengan URL video jika tersedia
                'region' => 'english',
                'duration' => '', // Isi dengan durasi jika tersedia
                'poster' => 'https://image.tmdb.org/t/p/original/2zmTngn1tYC1AvfnrFLhxeD82hz.jpg',
                'banner' => '7cqKGQMnNabzOpi7qaIgZvQ7NGV.jpg',
                'is_free' => false,
                'price' => 0,
                'rating' => 8.5
            ],
            [
                'film_category_id' => 2,
                'title' => 'Suidooster',
                'slug' => 'suidooster',
                'description' => 'Suidooster is a South African television soap opera produced by Suidooster Films which revolves around a matriarch, her family, friends and the people of Suidooster, a small shopping and business centre in the fictional Cape Town suburb of Ruiterbosch.',
                'production' => '', // Isi dengan informasi produksi jika tersedia
                'release_date' => '2015-11-16',
                'url_trailer' => '', // Isi dengan URL trailer jika tersedia
                'url_vidio' => '', // Isi dengan URL video jika tersedia
                'region' => 'afrikaans',
                'duration' => '', // Isi dengan durasi jika tersedia
                'poster' => 'https://image.tmdb.org/t/p/original/naCgSiacvV685kait6fBvhVhdce.jpg',
                'banner' => 'i8iqYtAy9qcO5RSrA1f6fY1n6SN.jpg',
                'is_free' => false,
                'price' => 0,
                'rating' => 8.273
            ],
            [
                'film_category_id' => 2,
                'title' => 'Top Chef VIP',
                'slug' => 'top-chef-vip',
                'description' => '',
                'production' => '', // Isi dengan informasi produksi jika tersedia
                'release_date' => '2022-08-09',
                'url_trailer' => '', // Isi dengan URL trailer jika tersedia
                'url_vidio' => '', // Isi dengan URL video jika tersedia
                'region' => 'spanish',
                'duration' => '', // Isi dengan durasi jika tersedia
                'poster' => 'https://image.tmdb.org/t/p/original/cw6M4c2MpLSzqzmrrqpSJlEbwCF.jpg',
                'banner' => 'mZCq3ldk7hUIyDvfZIOvTrxPWYS.jpg',
                'is_free' => false,
                'price' => 0,
                'rating' => 4.833
            ],
            [
                'film_category_id' => 2,
                'title' => 'De Bondgenoten',
                'slug' => 'de-bondgenoten',
                'description' => '',
                'production' => '', // Isi dengan informasi produksi jika tersedia
                'release_date' => '2023-10-22',
                'url_trailer' => '', // Isi dengan URL trailer jika tersedia
                'url_vidio' => '', // Isi dengan URL video jika tersedia
                'region' => 'dutch',
                'duration' => '', // Isi dengan durasi jika tersedia
                'poster' => 'https://image.tmdb.org/t/p/original/wsipinibYxrZhpkQ6MKxIMgL0hv.jpg',
                'banner' => '2Bkqjc9tNWo3KLr1aRYyJ7vMQtM.jpg',
                'is_free' => false,
                'price' => 0,
                'rating' => 7.2
            ],
            [
                'film_category_id' => 2,
                'title' => 'House of the Dragon',
                'slug' => 'house-of-the-dragon',
                'description' => 'The Targaryen dynasty is at the absolute apex of its power, with more than 15 dragons under their yoke. Most empires crumble from such heights. In the case of the Targaryens, their slow fall begins when King Viserys breaks with a century of tradition by naming his daughter Rhaenyra heir to the Iron Throne. But when Viserys later fathers a son, the court is shocked when Rhaenyra retains her status as his heir, and seeds of division sow friction across the realm.',
                'production' => '', // Isi dengan informasi produksi jika tersedia
                'release_date' => '2022-08-21',
                'url_trailer' => '', // Isi dengan URL trailer jika tersedia
                'url_vidio' => '', // Isi dengan URL video jika tersedia
                'region' => 'english',
                'duration' => '', // Isi dengan durasi jika tersedia
                'poster' => 'https://image.tmdb.org/t/p/original/t9XkeE7HzOsdQcDDDapDYh8Rrmt.jpg',
                'banner' => 'etj8E2o0Bud0HkONVQPjyCkIvpv.jpg',
                'is_free' => false,
                'price' => 0,
                'rating' => 8.421
            ]
        ];

        foreach ($filmsCategory1 as $film) {
            Film::create($film);
        }

        foreach ($filmsCategory2 as $film) {
            Film::create($film);
        }
    }
}
