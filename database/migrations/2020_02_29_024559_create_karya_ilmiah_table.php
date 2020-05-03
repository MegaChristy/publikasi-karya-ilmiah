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
        Schema::defaultStringLength(191);
        Schema::create('karya_ilmiah', function (Blueprint $table) {
            $table->bigIncrements('Id_karya_ilmiah');
            $table->string('Publisher');
            $table->string('Penulis');
            $table->date('Tanggal_publikasi');
            $table->string('File_karya_ilmiah');
            $table->string('Judul');
            $table->timestamps();
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
