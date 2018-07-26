<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartsFunctionsStarterSystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Parts_functions_starter_system', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand', 255);
            $table->string('model', 255);
            $table->binary('compatible_cars');
            $table->date('begin_year_of_production');
            $table->date('end_year_of_production');
            $table->unsignedinteger('eeid');
            $table->unsignedinteger('autopartid');
            
            $table->foreign('eeid')->references('id')->on('electrical_electronics');
            $table->foreign('autopartid')->references('id')->on('car_parts');
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
        Schema::dropIfExists('Parts_functions_starter_system');
    }
}
