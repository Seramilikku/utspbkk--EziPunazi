<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->increments('no_buku');
            $table->string('judul', 200);
            $table->string('edisi', 50);
            $table->unsignedInteger('no_rak');
            $table->date('tahun');
            $table->string('penerbit', 100);
            $table->unsignedInteger('kd_penulis');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('bukus');
    }
};
