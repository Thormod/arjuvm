<?php

use Faker\Generator as Faker;

use App\Workout;
use App\Exercise;

$factory->define(App\WorkoutPlan::class, function (Faker $faker) {
    return [
        'workout_id' => Workout::all()->random()->id,
        'exercise_id' => Exercise::all()->random()->id,
    ];
});
