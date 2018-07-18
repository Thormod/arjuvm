<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\NutritionalPlan;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('users')->insert([
            'name' =>  $faker->name,
            'email' => 'thor@gmail.com',
            'nutritional_plan_id' => NutritionalPlan::all()->random()->id,
            'password' => bcrypt('secret'),
        ]);

        factory(App\User::class, 50)->create();
    }
}
