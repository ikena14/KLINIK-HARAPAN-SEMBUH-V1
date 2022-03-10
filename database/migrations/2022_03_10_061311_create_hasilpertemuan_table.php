<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilpertemuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasilpertemuan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nama_pasien');
            $table->foreign('nama_pasien')->references('id')->on('user');
            $table->string('keteranganpenyakit', 500);
            $table->string('keteranganobatanjuranpemakaian', 500);
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
        Schema::dropIfExists('hasilpertemuan');
    }
}
