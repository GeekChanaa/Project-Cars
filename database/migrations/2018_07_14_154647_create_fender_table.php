<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fender', function(Blueprint $table) {
            $table->string('brand', 255);
            $table->string('model', 255);
            $table->binary('compatible_cars');
            $table->date('begin_year_of_production');
            $table->date('end_year_of_production');
            
        
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
        Schema::drop('fender');

    }
}