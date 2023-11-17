<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            ['name' => 'romance'],
            ['name' => 'comedy'],
            ['name' => 'cartoon'],
        ];
        DB::table('genres')->insert($genres);
    }
}
