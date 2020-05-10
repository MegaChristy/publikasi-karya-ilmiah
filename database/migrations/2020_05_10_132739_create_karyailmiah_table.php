<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryailmiahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyailmiah', function (Blueprint $table) {
            $table->bigIncrements('Id_karya_ilmiah');
            $table->string('Publisher');
            $table->string('Penulis');
            $table->date('Tanggal_publikasi');
            $table->string('Judul');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyailmiah');
    }
}
