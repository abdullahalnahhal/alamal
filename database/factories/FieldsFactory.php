<?php

use Faker\Generator as Faker;

$factory->define(\App\Fields::class, function (Faker $faker) {
    return [
        'title_en' => $faker->word,
        'title_ar' => $faker->word,
        'text_en' => $faker->text,
        'text_ar' => $faker->text,
        'file_path' => $faker->text
    ];
});
