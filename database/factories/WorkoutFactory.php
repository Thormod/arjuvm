<?php

use Faker\Generator as Faker;

$factory->define(App\Workout::class, function (Faker $faker) {  
    return [
        'name' => $faker->sentence(5),
        'description' => $faker->text(180),
    ];
});
