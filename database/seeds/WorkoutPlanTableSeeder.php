<?php

use Illuminate\Database\Seeder;

class WorkoutPlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\WorkoutPlan::class, 20)->create();
    }
}
