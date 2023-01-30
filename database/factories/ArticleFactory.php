<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Article::class, function (Faker $faker) {

    $title = $faker->sentence(3);

    return [
        'featured' => $faker->boolean,
        'title' => $title,
        'url' => Str::slug($title),
        'imageUrl' => Str::slug($title),
        'newsSite' => $faker->sentence(4),
        'summary' => $faker->text(100),
        'publishedAt' => $faker->dateTime()
    ];
});
