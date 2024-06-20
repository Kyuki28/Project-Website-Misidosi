<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    public function up()
    {
        Schema::create('donasi', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('detail');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donasi');
    }
}

