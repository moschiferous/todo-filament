<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->realTextBetween(minNbChars: 5, maxNbChars: 10),
            'description' => $this->faker->realTextBetween(minNbChars: 100, maxNbChars: 255),
            'id_user' => 1
        ];
    }
}
