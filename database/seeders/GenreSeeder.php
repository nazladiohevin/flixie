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
                'name' => 'Aksi',
                'description' => 'Film yang menampilkan adegan cepat dan intens, seperti perkelahian, kejar-kejaran, dan ledakan.'
            ],
            [
                'name' => 'Petualangan',
                'description' => 'Film yang berkisah tentang perjalanan dan penemuan, sering kali melibatkan lokasi eksotis dan misi yang menantang.'
            ],
            [
                'name' => 'Komedi',
                'description' => 'Film yang dirancang untuk menghibur dan membuat penonton tertawa dengan karakter dan situasi lucu.'
            ],
            [
                'name' => 'Drama',
                'description' => 'Film yang fokus pada pengembangan karakter dan tema emosional, sering kali menggambarkan situasi kehidupan nyata.'
            ],
            [
                'name' => 'Horor',
                'description' => 'Film yang bertujuan menimbulkan ketakutan dan ketegangan, sering kali dengan elemen supernatural atau kejadian yang menyeramkan.'
            ],
            [
                'name' => 'Fiksi Ilmiah',
                'description' => 'Film yang mengeksplorasi konsep futuristik, teknologi canggih, dan kehidupan makhluk asing, sering kali berlatar di luar angkasa.'
            ],
            [
                'name' => 'Fantasi',
                'description' => 'Film yang menampilkan dunia magis, makhluk mitologis, dan petualangan yang luar biasa di luar kenyataan.'
            ],
            [
                'name' => 'Misteri',
                'description' => 'Film yang berkisar pada pemecahan teka-teki atau pengungkapan rahasia, sering kali melibatkan penyelidikan kejahatan.'
            ],
            [
                'name' => 'Romantis',
                'description' => 'Film yang berfokus pada kisah cinta dan hubungan antar karakter, dengan penekanan pada emosi dan perasaan.'
            ],
            [
                'name' => 'Thriller',
                'description' => 'Film yang dikenal dengan ketegangan dan sensasi, sering kali melibatkan intrik, kejahatan, atau penyelidikan.'
            ]
        ];

        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}
