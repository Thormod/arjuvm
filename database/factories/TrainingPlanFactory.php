<?php

use Faker\Generator as Faker;

$factory->define(App\TrainingPlan::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(5),
        'description' => $faker->text(180),
        'video_url' => str_random(10),
        'image_url' => str_random(10)
    ];
});
