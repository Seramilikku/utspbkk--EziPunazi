<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->increments('id_peminjaman');
            $table->unsignedInteger('no_buku');
            $table->unsignedInteger('id_anggota');
            $table->date('tgl_peminjaman');
            $table->date('tgl_pengembalian')->nullable();
            $table->enum('status', ['kembali', 'belum']);
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('peminjamans');
    }
};
