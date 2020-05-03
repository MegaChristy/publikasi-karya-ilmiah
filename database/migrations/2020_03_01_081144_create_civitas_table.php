<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCivitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('civitas', function (Blueprint $table) {
            $table->bigIncrements('Id_civitas');
            $table->string('Nama_civitas');
            $table->string('Prodi');
            $table->string('Status');
            $table->date('Tanggal_upload');
            $table->string('Email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('civitas');
    }
}
