<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonasiMasukTable extends Migration
{
    public function up()
    {
        Schema::create('donasi_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('golongan');
            $table->unsignedBigInteger('jumlah_donasi');
            $table->string('jenis_bank');
            $table->string('bukti_donasi');
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donasi_masuk');
    }
}
