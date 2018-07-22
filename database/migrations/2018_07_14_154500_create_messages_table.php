<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function(Blueprint $table) {
            $table->string('ID_SENDER', 10);
            $table->string('ID_RECEIVER', 10);
            $table->string('CONTENT', 10);
            $table->string('USERID', 10);
            $table->primary('ID_Message');
        
            $table->timestamps();
            $table->foreign('ID_SENDER')->references('id')->on('users');
            $table->foreign('ID_RECEIVER')->references('id')->on('users');
        
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('messages');

    }
}
