<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MovieGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movie_genres = [
            ['movie_id' => 1, 'genre_id' =>1],
            ['movie_id' => 1, 'genre_id' =>2],
            ['movie_id' => 2, 'genre_id' =>1],
            ['movie_id' => 3, 'genre_id' =>1],
        ];
        DB::table('movie_genres')->insert($movie_genres);
    }
}
