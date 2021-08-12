<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

// $now = Carbon::now()->format('Y-m-d H:i:s');
//$end_time = Carbon::now()->addHours(3)->format('Y-m-d H:i:s');

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => 'event category ' . $faker->word(),
        'description' => $faker->text($maxNbChars = 100),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ];
});

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'name' => 'event no #' . $faker->randomNumber(5, false),
        'venue' => $faker->lexify('venue ??????'),
        'start_time' => Carbon::now()->format('Y-m-d H:i:s'),
        'end_time' => Carbon::now()->addHours(3)->format('Y-m-d H:i:s'),
        'city' => $faker->city,
        'organizer' => $faker->company,
        'description' => $faker->text($maxNbChars = 100),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ];
});
