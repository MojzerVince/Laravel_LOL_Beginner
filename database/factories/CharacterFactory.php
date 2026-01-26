<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->unique()->firstName(),
            "level" => fake()->numberBetween(1, 18),
            "health" => fake()->randomFloat(2,1,7000),
            "ballanced" => fake()->boolean(30),
            "description" => fake()->sentences(3, true)
        ];
    }
}
