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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('idreservation');
            $table->date('check_in');
            $table->date('check_out');
            $table->string('status');
            $table->decimal('total_price', 8, 2);
            $table->string('client');

            $table->unsignedBigInteger('room_id')->nullable(); // Clave foránea a la tabla 'rooms'
            
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
        Schema::dropIfExists('reservations');
    }
};
