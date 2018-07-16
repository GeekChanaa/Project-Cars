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
            $table->string('ID_MODEL', 10);
            $table->date('MODEL_YEAR');
            $table->string('MODEL_NAME', 255);
            $table->binary('MODEL_LOGO');
            $table->binary('MODEL_PICTURE');
            
            $table->primary('ID_MODEL');
        
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