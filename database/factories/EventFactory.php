<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'provider' => $faker->text(20),
        'articleId' => $faker->randomElement(Article::pluck('id'))
    ];
});
