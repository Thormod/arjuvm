<?php

use Illuminate\Database\Seeder;

class TrainingPlanDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i <= 60; $i++) {
            DB::table('training_plan_detail')->insert([
                'workout_id' => App\Workout::all()->random()->id,
                'training_plan_id' => 5,
                'day' => $i
            ]);
        }
        
        factory(App\TrainingPlanDetail::class, 40)->create();
    }
}
