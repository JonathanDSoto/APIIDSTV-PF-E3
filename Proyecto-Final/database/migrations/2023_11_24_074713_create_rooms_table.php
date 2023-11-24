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
            $table->string('type_room');
            $table->integer('available_room_number');
            $table->string('state');
            $table->unsignedBigInteger('hotels'); // Clave foránea a la tabla 'hotels'

            // Definiendo la relación con la tabla 'hotels'
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
