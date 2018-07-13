<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkoutPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workout_plan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('workout_id')->unsigned();
            $table->integer('exercise_id')->unsigned();   
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
        Schema::dropIfExists('workout_plan');
    }
}
