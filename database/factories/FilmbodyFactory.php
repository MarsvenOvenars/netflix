<?php

namespace Database\Factories;

use App\Models\Film;
use App\Models\Genre;
use App\Models\Director;
use App\Models\Actor;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilmbodyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $film = Film::inRandomOrder()->first();
        $genre = Genre::inRandomOrder()->first();
        $director = Director::inRandomOrder()->first();
        $actor = Actor::inRandomOrder()->first();
        return [
            'film_id' => $film->id,
            'genre_id' => $genre->id,
            'director_id' => $director->id,
            'actor_id' => $actor->id,
            'body' => fake()->paragraph(rand(1, 3)),
        ];
    }
}
