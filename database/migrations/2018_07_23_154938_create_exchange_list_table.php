<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExchangeListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchange_list', function (Blueprint $table) {
            $table->increments('id');
            $table->string('food_name');
            $table->float('carbohydrate_amount');
            $table->float('fat_amount');
            $table->float('protein_amount');
            $table->float('calorie_amount');
            $table->float('measure'); 
            $table->string('measure_type'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exchange_list');
    }
}
