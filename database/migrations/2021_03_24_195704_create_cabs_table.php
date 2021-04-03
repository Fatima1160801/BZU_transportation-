<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabs', function (Blueprint $table) {
            $table->id();
            $table->enum('cab-type', ['taxi','van','bus']);
            $table->string('cab-Number');
            $table->tinyinteger('seat-num');
            $table->string('license');
            $table->string('insurance');
            $table->foreignId('driver_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('machineNumber');
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
        Schema::dropIfExists('cabs');
    }
}
