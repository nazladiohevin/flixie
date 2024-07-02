<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seasonData = [
            [
                "season" => 1,
            ],
            [
                "season" => 2,
            ],
            [
                "season" => 3,
            ],
            [
                "season" => 4,
            ],
            [
                "season" => 5,
            ],
            [
                "season" => 6,
            ],
            [
                "season" => 7,
            ],
            [
                "season" => 8,
            ],
            [
                "season" => 9,
            ],
            [
                "season" => 10,
            ],
        ];

        foreach ($seasonData as $season) {
            Season::create($season);
        }
    }
}
