<?php

use Faker\Generator as Faker;

$factory->define(\App\Slider::class, function (Faker $faker) {
     return [
          'text_en' => $faker->text,
          'text_ar' => $faker->text,
          'title_en' => $faker->word,
          'title_ar' => $faker->word,
          'file_path' => $faker->word
     ];
});