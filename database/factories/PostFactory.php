<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //faker language arabic
        return [
            'title' => $this->faker->sentence(6),
            'content' => $this->faker->text(300),
            'thumbnail' => $this->faker->imageUrl(),
            'tag_id' => 1,
        ];
    }
}
