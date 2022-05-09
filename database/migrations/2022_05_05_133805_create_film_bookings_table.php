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
        Schema::create('film_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('film_id');
            $table->integer('bookAmount');
            $table->decimal('totalPrice');
            $table->string('row');
            $table->string('seatNumb');
            $table->string('accountNumb');
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
        Schema::dropIfExists('film_bookings');
    }
};
