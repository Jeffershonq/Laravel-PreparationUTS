<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'title' => 'Doraemon',
                'photo' => 'doraemon.jpg',
                'description' => 'description doraemon',
                'rating' => fake()->randomFloat(1,1,5),
            ],
            [
                'title' => 'Bluey',
                'photo' => 'bluey.jpg',
                'description' => 'description bluey movie',
                'rating' => fake()->randomFloat(1,1,5),  
            ],
            [
                'title' => 'Elemental',
                'photo' => 'elemental.png',
                'description' => 'description elemental movie',
                'rating' => fake()->randomFloat(1,1,5),
            ],
            [
                'title' => 'Spiderman',
                'photo' => 'spiderman.jpg',
                'description' => 'description spiderman movie',
                'rating' => fake()->randomFloat(1,1,5),
            ],
        ];
        DB::table('movies')->insert($movies);
    }
}
