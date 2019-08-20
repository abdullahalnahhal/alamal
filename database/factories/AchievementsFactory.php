<?php

use Faker\Generator as Faker;

$factory->define(\App\Achievements::class, function (Faker $faker) {
    return [
        'text_en' => $faker->text,
        'text_ar' => $faker->text,
        'title_en' => $faker->word,
        'title_ar' => $faker->word,
        'file_name' => $faker->word
    ];
});
