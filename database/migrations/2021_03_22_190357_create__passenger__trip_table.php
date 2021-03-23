<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassengerTripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_passenger__trip', function (Blueprint $table) {
            $table->id();
            $table->integer('seat-num');
            $table->text('note');
            $table->foreignId('passenger_id')->constrained();
            $table->foreignId('trip_id')->constrained();
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
        Schema::dropIfExists('_passenger__trip');
    }
}
