<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->enum('cab-type', ['taxi','van','bus']);
            $table->date('pickup-date');
            $table->time('pickup-time');
            $table->text('pickup');
            $table->text('dropoff');
            $table->float('price',5,2);
            $table->integer('passenger-counter');
            $table->foreignId('driver_id')->constrained();
            $table->foreignId('admin_id')->constrained();
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
        Schema::dropIfExists('trips');
    }
}
