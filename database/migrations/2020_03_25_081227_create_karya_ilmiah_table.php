<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryaIlmiahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karya_ilmiah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('penulis', 20);
            $table->date('tanggal_publikasi');
            $table->string('judul', 30);
            $table->year('tahun_ajaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karya_ilmiah');
    }
}
