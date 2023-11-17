<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $episodes = [
            [
                'movie_id' => 1,
                'episode' => 1,
                'title' => 'Nobita : Episode 1'
            ],
            [
                'movie_id' => 1,
                'episode' => 2,
                'title' => 'Nobita : Episode 2'
            ],
            [
                'movie_id' => 1,
                'episode' => 3,
                'title' => 'Nobita : Episode 3'
            ],
            [
                'movie_id' => 1,
                'episode' => 4,
                'title' => 'Nobita : Episode 4'
            ],
            [
                'movie_id' => 2,
                'episode' => 1,
                'title' => 'Bluey : Episode 1'
            ],
            [
                'movie_id' => 2,
                'episode' => 2,
                'title' => 'Bluey : Episode 2'
            ],
            [
                'movie_id' => 2,
                'episode' => 3,
                'title' => 'Bluey : Episode 3'
            ],
            [
                'movie_id' => 2,
                'episode' => 4,
                'title' => 'Bluey : Episode 4'
            ],
            [
                'movie_id' => 3,
                'episode' => 1,
                'title' => 'Elemental : Episode 1'
            ],
            [
                'movie_id' => 3,
                'episode' => 2,
                'title' => 'Elemental : Episode 2'
            ],
        ];
        DB::table('episodes')->insert($episodes);
    }
}
