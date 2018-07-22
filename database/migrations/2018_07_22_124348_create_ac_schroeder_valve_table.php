<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcSchroederValveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ac_schroeder_valve', function (Blueprint $table) {
            $table->increments('id');$table->string('BRAND', 255);
            $table->string('MODEL', 255);
            $table->binary('COMPATIBLE_CARS');
            $table->date('BEGIN_YEAR_OF_PRODUCTION');
            $table->date('END_YEAR_OF_PRODUCTION');
            $table->int('MAUPID',10);
            $table->int('AUTOPARTID',10);
            
            $table->foreign('MAUPID')->references('miscellaneous_auto_parts')->on('MAUPID');
            $table->foreign('AUTOPARTID')->references('car_parts')->on('AUTOPARTID');
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
        Schema::dropIfExists('ac_schroeder_valve');
    }
}
