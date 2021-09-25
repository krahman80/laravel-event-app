<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

// $factory->define(App\Event::class, function (Faker $faker) {
//     return [
//         'name' => 'event category ' . $faker->word(),
//         'description' => $faker->text($maxNbChars = 100),
//         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
//         'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
//     ];
// });

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'description' => $faker->text($maxNbChars = 100),
        'user_id' => function() {
            return factory(App\User::class)->create()->id;
        },
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ];
});