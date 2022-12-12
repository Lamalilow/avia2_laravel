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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->foreignId('start_city_id');
            $table->foreign('start_city_id')->references('id')->on('cities');
            $table->foreignId('end_city_id');
            $table->foreign('end_city_id')->references('id')->on('cities');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->foreignId('airplane_id');
            $table->foreign('airplane_id')->references('id')->on('airplanes');
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
        Schema::dropIfExists('flights');
    }
};
