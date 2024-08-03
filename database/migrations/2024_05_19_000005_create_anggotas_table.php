<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->increments('id_anggota');
            $table->string('nama', 150);
            $table->string('no_hp', 150);
            $table->text('alamat');
            $table->string('email', 200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('anggotas');
    }
};
