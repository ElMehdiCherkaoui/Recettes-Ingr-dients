<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipes>
 */
class RecipesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'description' => fake()->text(100),
            'steps' => fake()->text(20),
            'image' => fake()->imageUrl(640, 480, 'food'),
            'isRecipeOfDay' => fake()->boolean(20),
            'created_at' => now(),
            'updated_at' => now(),
            'users_id' => fake()->numberBetween(1, 50),
            'categories_id' => fake()->numberBetween(1, 20),
            'ingredients_id' => fake()->numberBetween(1, 20),

        ];
    }
}