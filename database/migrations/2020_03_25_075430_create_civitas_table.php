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
        Schema::create('civitas', function (Blueprint $table) {
            $table->bigIncrements('id_civitas');
            $table->string('alamat', 50);
            $table->string('status', 15);
            $table->boolean('jenis_kelamin');
            $table->string('email', 30);
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
