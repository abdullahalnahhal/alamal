<?php

use Faker\Generator as Faker;

$factory->define(\App\Contacts::class, function (Faker $faker) {
    return [
        'address' => json_encode([]),
        'phone' => json_encode([]),
        'working_days' => json_encode([]),
        'email' => json_encode([]),
        'facebook' => json_encode([]),
        'instagram' => json_encode([]),
        'youtube' => json_encode([]),
        'linkedin' => json_encode([]),
        'google_plus' => json_encode([])
    ];
});
