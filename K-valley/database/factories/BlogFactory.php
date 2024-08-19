<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraphs(3, true), // Generates a larger block of text
            'is_published' => $this->faker->boolean, // Random boolean value
            'author_id' => \App\Models\Author::factory(), // Assumes you have an Author model and factory

        ];
    }
}
