<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => mt_rand(1, 3),
            "film_id" => mt_rand(1, 10),
            "comment" => fake()->paragraph(),
            "rating" => mt_rand(1, 5)
        ];
    }
}
