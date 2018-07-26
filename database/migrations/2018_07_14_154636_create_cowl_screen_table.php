<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCowlscreenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cowl_screen', function(Blueprint $table) {
            $table->string('brand', 255);
            $table->string('model', 255);
            $table->binary('compatible_cars');
            $table->date('begin_year_of_production');
            $table->date('END_YEAR_OF_PRODUCTION');
            
        
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
        Schema::drop('cowl_screen');

    }
}