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
            $table->integer('target_calories')->default(0);
            $table->float('actual_weight')->default(0);
            $table->float('target_weight')->default(0);
            $table->float('carbohydrate')->default(0);
            $table->float('protein')->default(0);
            $table->float('fat')->default(0); 
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
