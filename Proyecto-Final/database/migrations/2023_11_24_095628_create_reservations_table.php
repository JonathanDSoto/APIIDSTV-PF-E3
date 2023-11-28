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
            $table->id();
            $table->string('name_client');
            $table->string('rate');
            $table->string('room');
            $table->integer('coupon');
            $table->date('check_in');
            $table->date('check_out');
            $table->string('status');
            $table->decimal('total_price', 8, 2);

            $table->unsignedBigInteger('room_id')->nullable(); 
            $table->unsignedBigInteger('client_id')->nullable();
            $table->unsignedBigInteger('coupon_id')->nullable();
            $table->unsignedBigInteger('rates_id')->nullable();

            $table->foreign('room_id')->references('id')->on('rooms');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('coupon_id')->references('id')->on('coupons');
            $table->foreign('rates_id')->references('id')->on('rates');

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
