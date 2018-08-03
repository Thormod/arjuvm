<?php

use Faker\Generator as Faker;

use App\Workout;
use App\TrainingPlan;

$factory->define(App\TrainingPlanDetail::class, function (Faker $faker) {
    static $day = 1;
    return [
        'workout_id' => Workout::all()->random()->id,
        'training_plan_id' => TrainingPlan::all()->random()->id,
        'day' => $day++
    ];
});
