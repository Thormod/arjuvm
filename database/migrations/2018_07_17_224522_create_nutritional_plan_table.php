<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutritionalPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutritional_plan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('target_calories');
            $table->float('actual_weight');
            $table->float('target_weight');
            $table->float('carbohydrate');
            $table->float('protein');
            $table->float('fat'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nutritional_plan');
    }
}
