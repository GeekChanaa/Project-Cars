<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatemodelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MODEL', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('brandid');
            $table->date('model_year');
            $table->string('model_name', 255);
            $table->binary('model_logo');
            $table->binary('model_picture');

            $table->foreign('brandid')->references('id')->on('brand');
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
        Schema::drop('MODEL');

    }
}