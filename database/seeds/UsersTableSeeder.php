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
            'phone' => $faker->e164PhoneNumber,            
            'email' => 'thor@gmail.com',
            'admin' => true,
            'gender' => $faker->randomElement($array = array ('male', 'female')),
            'birthdate' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'nutritional_plan_id' => 1,
            'password' => bcrypt('secret'),
        ]);

        factory(App\User::class, 49)->create();
    }
}
