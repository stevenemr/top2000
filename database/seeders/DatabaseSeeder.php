<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Ranking;
use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Solo Artists
        Artist::factory(1000)
            ->has(Song::factory(10)->has(Ranking::factory(3)))
            ->create();

        // Bands
        Artist::factory(1000)
            ->has(Artist::factory(3), 'members')
            ->has(Song::factory(15)->has(Ranking::factory(3)))
            ->create();
    }
}
