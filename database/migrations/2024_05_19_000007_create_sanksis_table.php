<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sanksis', function (Blueprint $table) {
            $table->increments('id_sanksi');
            $table->unsignedInteger('id_anggota');
            $table->unsignedInteger('id_peminjaman');
            $table->integer('jumlah_denda');
            $table->enum('status', ['tunggakan', 'lunas']);
            $table->timestamps();

           
        });
    }

    public function down()
    {
        Schema::dropIfExists('sanksis');
    }
};
