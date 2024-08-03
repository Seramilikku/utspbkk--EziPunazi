<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('raks', function (Blueprint $table) {
            $table->increments('kd_rak');
            $table->string('lokasi', 150);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('raks');
    }
};
