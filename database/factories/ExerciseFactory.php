<?php

use Faker\Generator as Faker;

$factory->define(App\Exercise::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(5),
        'description' => $faker->text(180),
        'video_url' => $faker->randomElement(['https://www.youtube.com/watch?v=SIeBuGBEQ9w', 'https://www.youtube.com/watch?v=CGkjggbXLNs', 'https://www.youtube.com/watch?v=iecyRM7zBGs&t=589s']),
        'image_url' => $faker->imageUrl($width = 350, $height = 350),
        'sets' => '4',
        'reps' => '8,10,12',
        'rest' => '60"'
    ];
});
