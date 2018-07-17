<?php

use Faker\Generator as Faker;

$factory->define(App\NutritionalPlan::class, function (Faker $faker) {
    return [
        'target_calories' => rand(1700,3500),
        'actual_weight' => rand(40,150),
        'target_weight' => rand(40,150),
        'carbohydrate' => rand(10,900),
        'protein' => rand(10,900),
        'fat' => rand(10,900)
    ];
});
