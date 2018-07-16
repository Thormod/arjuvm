<?php

use Faker\Generator as Faker;

use App\User;
use App\TrainingPlan;

$factory->define(App\Orders::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'training_plan_id' => TrainingPlan::all()->random()->id,
    ];
});
