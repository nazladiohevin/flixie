<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Episode;
use App\Models\Film;
use App\Models\Genre;
use App\Models\GenreDetail;
use App\Models\Season;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class APITestSeeder extends Seeder
{
    private function getLanguageName($code) {
        $languages = [
            'en' => 'english',
            'ja' => 'japanese',
            "ko" => "south Korea"
            // Tambahkan pemetaan bahasa lain jika diperlukan
        ];
    
        // Gunakan isset untuk memeriksa apakah kode ada dalam array
        if (isset($languages[strtolower($code)])) {
            return $languages[strtolower($code)];
        } else {
            return 'english'; // Atau nilai default lainnya jika kode tidak ditemukan
        }
    }

    function checkApiResponse($url) {
        $client = new \GuzzleHttp\Client();
            
        $response = $client->request('GET', $url, [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkYTFiODAxNWQyZjgzNjI0NDA0M2Q5ZmUyYzE1YWIxZCIsIm5iZiI6MTcxOTY3NzAxMi4yNzgsInN1YiI6IjY2NzA0YTcyMmIwOTMxNGQ2MjU0Nzg4YyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Qp0JimqSr2RPUal-ALdnOcX--4Og3c96rQ8pM_1wOe8',
                'accept' => 'application/json',
            ],
        ]);
        $statusCode = $response->getStatusCode();

        if ($statusCode === 200) {
            return json_decode($response->getBody()->getContents(), true);            
        } else {
            return false;
        }        
    }

    public function run(): void
    {
      $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/trending/all/day?page=1&language=en-US', [
          'headers' => [
            'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkYTFiODAxNWQyZjgzNjI0NDA0M2Q5ZmUyYzE1YWIxZCIsIm5iZiI6MTcxOTY3NzAxMi4yNzgsInN1YiI6IjY2NzA0YTcyMmIwOTMxNGQ2MjU0Nzg4YyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Qp0JimqSr2RPUal-ALdnOcX--4Og3c96rQ8pM_1wOe8',
            'accept' => 'application/json',
          ],
        ]);
        $responseBody = $response->getBody()->getContents();
        $films = json_decode($responseBody, true);

        foreach ($films["results"] as $film) {
            sleep(1);

            $filmId = $film["id"];
            $filmType = $film["media_type"] ;
            $title = $film['title'] ?? $film['name'] ?? 'No title or name';
            $slug = strtolower($title);            
            $slug = preg_replace('/[^a-z0-9\s]/', '', $slug);            
            $slug = preg_replace('/\s+/', '-', $slug);
                
            $slug = trim($slug, '-');

            $detailFilm = $this->checkApiResponse("https://api.themoviedb.org/3/$filmType/$filmId?language=en-US");            
            
            if (!$detailFilm) {
                continue;
            }
            
            $vidioFilm = $this->checkApiResponse("https://api.themoviedb.org/3/$filmType/$filmId/videos?language=en-US");                        
            $isFree = (bool) rand(0, 1);

            $createdFilm = Film::create([
                "film_category_id" => $film["media_type"] == "tv" ? 2 : 1,
                "title" => $title,
                "slug" => $slug,
                "description" => $film["overview"] ?? "lorem ipsum",
                "production" => $detailFilm["production_companies"][0]["name"] ?? "Flixie Companies",
                "release_date" => $film["release_date"] ?? now(),
                "url_trailer" => $vidioFilm["results"][0]["key"] ?? "TGbUpEJ1z-k",
                "url_vidio" => $vidioFilm["results"][1]["key"] ?? $vidioFilm["results"][0]["key"] ?? "TGbUpEJ1z-k",
                "region" => $this->getLanguageName($film["original_language"]),
                "duration" => $film["media_type"] == "tv" ? 1440 : 9000,
                "poster" => $film["poster_path"] ?? "/t9XkeE7HzOsdQcDDDapDYh8Rrmt.jpg",
                "banner" => $film["backdrop_path"] ?? "/xtAQ7j9Yd0j4Rjbvx1hW0ENpXjf.jpg",
                "is_free" => $isFree,
                "price" => $isFree ? 0 : random_int(1, 99) * 1000,
                "rating" => $film["vote_average"] > 5 ? $film["vote_average"] - 5 : $film["vote_average"],                
            ]);
            
            // Inputin Genre
            foreach ($detailFilm["genres"] as $genre) {
                $detailGenre = Genre::where("name", $genre["name"])->first();
                if ($detailGenre) {
                    GenreDetail::create([
                        "genre_id" => $detailGenre->id,
                        "film_id" => $createdFilm->id
                    ]);                
                }                
            }
            
            // Inputin Artist
            $castPath = $film["media_type"] == "tv" ? "aggregate_credits" : "credits";
            $filmCasts = $this->checkApiResponse("https://api.themoviedb.org/3/$filmType/$filmId/$castPath?language=en-US");            
            foreach ($filmCasts["cast"] as $cast) {
                if (isset($cast["character"])) {
                    Artist::create([
                        "film_id" => $createdFilm->id,
                        "name" => $cast["name"],
                        "character" => $cast["character"],
                        "image_path" => $cast["profile_path"],
                    ]);
                }
            }

            // Inputan Episode
            if ($film["media_type"] == "tv") {
                $seasonNumber = null;
                if (isset($detailFilm["next_episode_to_air"]["season_number"])) {
                    $seasonNumber = $detailFilm["next_episode_to_air"]["season_number"];
                } elseif (isset($detailFilm["last_episode_to_air"]["season_number"])) {
                    $seasonNumber = $detailFilm["last_episode_to_air"]["season_number"];
                }
                for ($i=1; $i <= $seasonNumber ; $i++) { 
                    if ($i > 3) break;

                    usleep(300);

                    $tvEpisode = $this->checkApiResponse("https://api.themoviedb.org/3/tv/$filmId/season/$i?language=en-US");
                    $season = Season::where("season", $i)->first();
                                                     
                    foreach ($tvEpisode["episodes"] as $index => $episode) {                        
                        usleep(300);              

                        if ($index + 1 > 3) break;

                        $episodeVidio = $this->checkApiResponse("https://api.themoviedb.org/3/tv/$filmId/season/$i/episode/" . $episode["episode_number"] . "/videos");                        
                        Episode::create([
                            "season_id" => $season->id,
                            "film_id" => $createdFilm->id,
                            "episode" => $episode["episode_number"],
                            "url_vidio" => $episodeVidio["results"][0]["key"] ?? "TGbUpEJ1z-k"
                        ]);
                    }
                }                
            }
        }

        echo "aman";
  
    }
}
