<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(3);

        return [
            'featured' => $this->faker->boolean,
            'title' => $title,
            'url' => Str::slug($title),
            'imageUrl' => Str::slug($title),
            'newsSite' => $this->faker->sentence(4),
            'summary' => $this->faker->text(100),
            'publishedAt' => $this->faker->dateTime()
        ];
    }
}
