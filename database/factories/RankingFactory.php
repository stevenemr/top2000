<?php

namespace Database\Factories;

use App\Models\Ranking;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Ranking>
 */
class RankingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'song_id' => $this->faker->numberBetween(1, 1000),
            'position' => $this->faker->numberBetween(1, 2000),
            'year' => $this->faker->year(), 
        ];
    }
}
