<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePalecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paleces', function (Blueprint $table) {
            $table->id();
            $table->text('place');
            $table->enum('status',['pickup','dropoff'])->default('pickup');
            $table->enum('cabType',['van','bus'])->default('bus');
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
        Schema::dropIfExists('paleces');
    }
}
