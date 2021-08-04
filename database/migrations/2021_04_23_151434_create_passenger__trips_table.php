<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassengerTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('passenger__trips', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('seatNum');
            $table->text('note');
            $table->enum('PaymentType', ['cash','BZUid']);
            $table->text('DriverNote');
            $table->enum('statusTrip',['waiting','delete','confirmed','completed'])->default('waiting');
            $table->foreignId('passenger_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('trip_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('passenger__trips');
    }
}
