<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->e164PhoneNumber,
        'gender' => $faker->randomElement($array = array ('male', 'female')),
        'birthdate' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'avatar_url' => $faker->imageUrl($width = 200, $height = 200),
        'nutritional_plan_id' => $faker->unique()->numberBetween($min = 2, $max = 50),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
