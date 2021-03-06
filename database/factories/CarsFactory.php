<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement($array = array ('Ford','Honda','Toyota')),
        'Model' => $faker->text,
        'Year' => $faker->year($max = 'now'),
    ];
});
