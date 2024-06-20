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
    Schema::table('donasi_masuk', function (Blueprint $table) {
        $table->string('status_validasi')->default('belum divalidasi');
    });
}

public function down()
{
    Schema::table('donasi_masuk', function (Blueprint $table) {
        $table->dropColumn('status_validasi');
    });
}

};
