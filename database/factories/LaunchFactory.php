<?php

namespace Database\Factories;

use App\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class LaunchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'provider' => $this->faker->text(20),
            'articleId' => $this->faker->randomElement(Article::pluck('id'))
        ];
    }
}
