<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBodyAndMainPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BODY_AND_MAIN_PARTS', function(Blueprint $table) {
            $table->string('ID_BODYMAINPART', 10);
            $table->string('TYPE', 20);
        
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
        Schema::drop('BODY_AND_MAIN_PARTS');

    }
}