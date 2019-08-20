<?php

use Faker\Generator as Faker;

$factory->define(\App\News::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'text' => $faker->text,
        'published' => 1,
        'file_path' => $faker->text
    ];
});
