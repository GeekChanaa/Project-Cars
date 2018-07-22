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
        Schema::create('COWL_SCREEN', function(Blueprint $table) {
            $table->string('BRAND', 255);
            $table->string('MODEL', 255);
            $table->binary('COMPATIBLE_CARS');
            $table->date('BEGIN_YEAR_OF_PRODUCTION');
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
        Schema::drop('COWL_SCREEN');

    }
}