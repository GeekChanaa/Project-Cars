<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManometerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Manometer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('BRAND', 255);
            $table->string('MODEL', 255);
            $table->binary('COMPATIBLE_CARS');
            $table->date('BEGIN_YEAR_OF_PRODUCTION');
            $table->date('END_YEAR_OF_PRODUCTION');
            $table->unsignedInteger('EEID');
            $table->unsignedInteger('AUTOPARTID');
            
            $table->foreign('EEID')->references('id')->on('ELECTRICAL_ELECTRONICS');
            $table->foreign('AUTOPARTID')->references('id')->on('CAR_PARTS');
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
        Schema::dropIfExists('Manometer');
    }
}
