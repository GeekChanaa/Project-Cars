<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotorcycleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MOTORCYCLE', function(Blueprint $table) {
            $table->string('ID_MOTORCYCLE', 10);
            $table->string('MOTORCYCLE_CATEGORY', 50);
            
            $table->primary('ID_MOTORCYCLE');
        
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
        Schema::drop('MOTORCYCLE');

    }
}