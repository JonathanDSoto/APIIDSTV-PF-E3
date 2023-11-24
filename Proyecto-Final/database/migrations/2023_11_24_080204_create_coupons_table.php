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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id('idcoupons');
            $table->string('coupon_code');
            $table->decimal('discount', 8, 2);
            $table->date('expiration_date');

            $table->unsignedBigInteger('reservation_id'); // Clave foránea a la tabla 'reservations'

            // Definiendo la relación con la tabla 'reservations'
            $table->foreign('reservation_id')->references('idreservation')->on('reservations');

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
        Schema::dropIfExists('coupons');
    }
};
