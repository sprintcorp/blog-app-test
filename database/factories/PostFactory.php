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
    public function definition()
    {
        return [
            'id' => $this->faker->numberBetween(1,10),
            'title' => $this->faker->text,
            'link' => $this->faker->url,
            'amount_of_upvotes' => $this->faker->numberBetween(1,100),
            'author_name' => $this->faker->name(),
        ];
    }
}
