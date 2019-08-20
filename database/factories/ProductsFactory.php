<?php

use Faker\Generator as Faker;

$factory->define(\App\Products::class, function (Faker $faker) {
     return [
          'title_en' => $faker->word,
          'title_ar' => $faker->word,
          'text_en' => $faker->text,
          'text_ar' => $faker->text,
          'file_path' => $faker->text,
          'partner_id' => factory('App\Partners')
     ];
});
