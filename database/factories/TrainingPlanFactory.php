<?php

use Faker\Generator as Faker;

$factory->define(App\TrainingPlan::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'short_description' => $faker->text(100),
        'description' => $faker->paragraph($nbSentences = 30, $variableNbSentences = true),
        'price' => rand(50,200),
        'discount' => rand(10,50),
        'video_url' => $faker->randomElement(['https://www.youtube.com/watch?v=SIeBuGBEQ9w', 'https://www.youtube.com/watch?v=CGkjggbXLNs', 'https://www.youtube.com/watch?v=iecyRM7zBGs&t=589s']),
        'image_url' => $faker->imageUrl($width = 555, $height = 335)
    ];
});
