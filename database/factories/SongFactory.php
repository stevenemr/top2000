<?php

namespace Database\Factories;

use App\Models\Song;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(random_int(1, 5), true),
            'content' => "<p>" . $this->faker->paragraphs(2, true) . "</p>",
            'release_date' => $this->faker->date(),
            'duration' => $this->faker->numberBetween(120, 360)
        ];
    }
}
