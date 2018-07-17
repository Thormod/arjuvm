<?php

use Illuminate\Database\Seeder;

class NutritionalPlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\NutritionalPlan::class, 50)->create();        
    }
}
