<?php

use Faker\Generator as Faker;

$factory->define(\App\TextWord::class, function (Faker $faker) {
    return [
        'text_en' => $faker->word,
        'text_ar' => $faker->word
    ];
});
