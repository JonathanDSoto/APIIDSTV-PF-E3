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
        Schema::create('rates', function (Blueprint $table) {
            $table->id('idrates');
            $table->string('type_room');
            $table->date('check_in');
            $table->date('check_out');
            $table->decimal('price_day', 8, 2); // Decimal para almacenar precios

            $table->unsignedBigInteger('room_id'); // Clave foránea a la tabla 'rooms'

            // Definiendo la relación con la tabla 'rooms'
            $table->foreign('room_id')->references('idrooms')->on('rooms');

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
        Schema::dropIfExists('rates');
    }
};
