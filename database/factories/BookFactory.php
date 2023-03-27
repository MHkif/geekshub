<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'category_id' => 1,
            'author' => fake()->name(),
            'title' => fake()->sentence(4),
            'rating' => 4,
            'cover' => fake()->company(),
            'url' => fake()->url(),
            'description' => fake()->paragraph(5),
        ];
    }
}
