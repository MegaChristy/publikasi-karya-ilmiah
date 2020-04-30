<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriKaryaIlmiahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('kategori_karya_ilmiah', function (Blueprint $table) {
            $table->bigIncrements('Id_kategori_karya_ilmiah');
            $table->string('Jenis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori_karya_ilmiah');
    }
}
