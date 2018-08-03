<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            NutritionalPlanTableSeeder::class,
            UsersTableSeeder::class,
            TrainingPlanTableSeeder::class,
            ExerciseTableSeeder::class,
            WorkoutTableSeeder::class,
            WorkoutPlanTableSeeder::class,
            TrainingPlanDetailTableSeeder::class,
            OrdersTableSeeder::class,
            ExchangeListTableSeeder::class,
        ]);
    }
}
