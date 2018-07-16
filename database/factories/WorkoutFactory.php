<?php

use Faker\Generator as Faker;

$factory->define(App\Workout::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(5),
        'description' => $faker->text(180),
        'day' => $faker->unique()->numberBetween($min = 1, $max = 20)
    ];
});
