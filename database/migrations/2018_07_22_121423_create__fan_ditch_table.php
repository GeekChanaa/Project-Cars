<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFanDitchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Fan_ditch', function (Blueprint $table) {
            $table->increments('id');
            $table->string('BRAND', 255);
            $table->string('MODEL', 255);
            $table->binary('COMPATIBLE_CARS');
            $table->date('BEGIN_YEAR_OF_PRODUCTION');
            $table->date('END_YEAR_OF_PRODUCTION');
            $table->integer('EEID',10);
            $table->integer('AUTOPARTID',10);
            
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
        Schema::dropIfExists('Fan_ditch');
    }
}
