<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('idrooms');
            $table->string('image');
            $table->string('name_room');
            $table->text('description');
            $table->string('state');
            $table->string('hotel_name');
            $table->double('rate_room');
            $table->unsignedBigInteger('hotels'); 
           
            $table->foreign('hotels')->references('idhotels')->on('hotels');

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
        Schema::dropIfExists('rooms');
    }
};
