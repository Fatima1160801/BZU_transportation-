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
            $table->enum('cabType', ['taxi','van','bus']);
            $table->date('pickupDate');
            $table->time('pickupTime');
            $table->text('pickup');
            $table->text('dropoff');
            $table->enum('statusTrip',['waiting','delete','confirmed'])->default('waiting');
            $table->double('price',5,2)->default(5.00);
            $table->bigInteger('passengerCounter');
            $table->foreignId('driver_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
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
