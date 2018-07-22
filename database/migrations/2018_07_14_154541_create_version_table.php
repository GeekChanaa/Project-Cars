<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVersionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('VERSION', function(Blueprint $table) {
            $table->binary('VERSION_PICTURE');
            $table->string('TYPE', 255);
            $table->string('VERSION_NAME', 255);
            $table->string('VERSION_ENGINE', 255);
            $table->integer('DOORS_COUNT');
            $table->FLOAT('POWER');
            $table->FLOAT('ACCELERATION');
            $table->FLOAT('MAX_SPEED');
            $table->integer('SEATS_COUNT');
            $table->FLOAT('LENGTH');
            $table->FLOAT('WIDTH');
            $table->FLOAT('HEIGHT');
            $table->FLOAT('VOLUME');
            $table->FLOAT('FUEL_CONSUMPTION');
            $table->FLOAT('CO2_EMISSIONS');
            $table->FLOAT('MAX_WEIGHT');
            $table->string('TIRE_SIZE', 80);
            $table->string('WHEEL_RIMS_SIZE', 80);
            $table->FLOAT('ENGINE_OIL_CAPACITY');
            $table->string('TURBINE', 80);
            $table->string('POSITION_OF_ENGINE', 20);
            $table->date('BEGIN_YEAR_OF_PRODUCTION');
            $table->date('END_YEAR_OF_PRODUCTION');
            $table->string('POSITION_OF_CYCLINDERS', 80);
            $table->integer('NUMBER_OF_CYLINDERS');
            $table->FLOAT('COOLANT');
            $table->string('FUEL_TYPE', 20);
            $table->string('DRIVE_WHEEL', 20);
            $table->integer('NUMBER_GEARS');
            
        
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
        Schema::drop('VERSION');

    }
}