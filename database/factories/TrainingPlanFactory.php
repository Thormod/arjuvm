<?php

use Faker\Generator as Faker;

$factory->define(App\TrainingPlan::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'short_description' => $faker->text(100),
        'description' => $faker->paragraph($nbSentences = 30, $variableNbSentences = true),
        'price' => rand(50,200),
        'discount' => rand(10,50),
        'video_url' => $faker->randomElement(['https://www.youtube.com/embed/SIeBuGBEQ9w?rel=0', 'https://www.youtube.com/embed/CGkjggbXLNs?rel=0', 'https://www.youtube.com/embed/iecyRM7zBGs?rel=0']),
        'image_url' => $faker->imageUrl($width = 555, $height = 335)
    ];
});
