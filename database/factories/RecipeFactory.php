<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'category' => fake()->word(),
            'preparation_time' => fake()->numberBetween(10, 120),
            'chef_id' => \App\Models\Chef::factory(),
        ];
    }
}