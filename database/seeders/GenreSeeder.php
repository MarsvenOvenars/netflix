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
        $objs = [
            'Action',
            'Adventure',
            'Animation',
            'Biography',
            'Comedy',
            'Crime',
            'Documentary',
            'Drama',
            'Fantasy',
            'Historical',
            'Horror',
            'Musical',
            'Mystery',
            'Neo-Noir',
            'Psychological Thriller',
            'Romance',
            'Science Fiction',
            'Sports',
            'Superhero',
            'Thriller',
            'War',
            'Western',
            'Coming-of-Age',
            'Mockumentary',
            'Independent',
        ];

        foreach ($objs as $obj) {
            Genre::create([
                'name' => $obj,
            ]);
        };
    }
}
