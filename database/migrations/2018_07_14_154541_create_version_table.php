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
            $table->binary('version_picture');
            $table->string('type', 255);
            $table->string('version_name', 255);
            $table->string('version_engine', 255);
            $table->integer('doors_count');
            $table->float('power');
            $table->float('acceleration');
            $table->float('max_speed');
            $table->integer('seats_count');
            $table->float('length');
            $table->float('width');
            $table->float('height');
            $table->float('volume');
            $table->float('fuel_consumption');
            $table->float('co2_emissions');
            $table->float('max_weight');
            $table->string('tire_size', 80);
            $table->string('wheel_rims_size', 80);
            $table->float('engine_oil_capacity');
            $table->string('turbine', 80);
            $table->string('position_of_engine', 20);
            $table->date('begin_year_of_production');
            $table->date('end_year_of_production');
            $table->string('position_of_cyclinders', 80);
            $table->integer('number_of_cylinders');
            $table->float('coolant');
            $table->string('fuel_type', 20);
            $table->string('drive_wheel', 20);
            $table->integer('number_gears');
            $table->increments('id');
            
        
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