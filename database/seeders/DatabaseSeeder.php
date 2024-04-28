<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Director;
use App\Models\Filmbody;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
        FilmSeeder::class,
        ]);

        $this->call([
        GenreSeeder::class,
        ]);
    
        Actor::factory()
        ->count(200)
        ->create();

        Director::factory()
        ->count(200)
        ->create();

        Filmbody::factory()
        ->count(200)
        ->create();
    }
}
