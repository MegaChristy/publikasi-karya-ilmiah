<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('notifikasi', function (Blueprint $table) {
            $table->bigIncrements('Id_notifikasi');
            $table->string('Alamat_tujuan');
            $table->date('Tanggal_pengiriman');
            $table->string('Alamat_pengiriman');
            $table->time('Waktu_pengiriman');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifikasi');
    }
}
