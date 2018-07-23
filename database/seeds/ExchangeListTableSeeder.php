<?php

use Illuminate\Database\Seeder;

class ExchangeListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exchange_list')->insert([
            [
                'food_name' => 'Huevo',
                'carbohydrate_amount' => 0,
                'fat_amount' => 5.5,
                'protein_amount' => 6.5,
                'calorie_amount' => 80,
                'measure' => 50,
                'measure_type' => 'gramos'
            ],
            [
                'food_name' => 'Arepa',
                'carbohydrate_amount' => 27,
                'fat_amount' => 1,
                'protein_amount' => 2,
                'calorie_amount' => 125,
                'measure' => 100,
                'measure_type' => 'gramos'
            ],
            [
                'food_name' => 'Pizza Genérica',
                'carbohydrate_amount' => 30,
                'fat_amount' => 12,
                'protein_amount' => 11,
                'calorie_amount' => 280,
                'measure' => 1,
                'measure_type' => 'rebanada'
            ],
            [
                'food_name' => 'Maíz/Mazorca',
                'carbohydrate_amount' => 16,
                'fat_amount' => 0,
                'protein_amount' => 2,
                'calorie_amount' => 75,
                'measure' => 100,
                'measure_type' => 'gramos'
            ],
            [
                'food_name' => 'Queso Parmesano',
                'carbohydrate_amount' => 0,
                'fat_amount' => 9,
                'protein_amount' => 11,
                'calorie_amount' => 280,
                'measure' => 30,
                'measure_type' => 'gramos'
            ],
            [
                'food_name' => 'Hamburguesa Normal (Sin Tocineta)',
                'carbohydrate_amount' => 42,
                'fat_amount' => 25,
                'protein_amount' => 40,
                'calorie_amount' => 550,
                'measure' => 1,
                'measure_type' => 'unidad'
            ],

        ]);
    }
}
