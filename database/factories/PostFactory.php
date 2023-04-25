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
            'title' => $this->faker->unique()->sentence(),
            // Key has to be identical with column names in table
            // 'title' => 'Model Factories'
            // is another way how to write it, but faker
            // instance helps making multiple values
            // unique means that the vale has to be unique in db
            'excerpt' => $this->faker->realText($maxNbChars = 50),
            // Real text - with max number of characters of 50
            'body' => $this->faker->text(),
            // text() makes it a bit longer
            'image_path' => $this->faker->imageUrl(640, 480),
            'is_published' => 1,
            'min_to_read' => $this->faker->numberBetween(1, 10)
        ];
    }
}
