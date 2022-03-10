<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertemuanpasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertemuanpasien', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('user');
            $table->unsignedBigInteger('nama_pasien');
            $table->foreign('nama_pasien')->references('id')->on('user');
            $table->unsignedBigInteger('tahun_lahir_pasien');
            $table->foreign('tahun_lahir_pasien')->references('id')->on('user');
            $table->unsignedBigInteger('tanggallahirpasien');
            $table->foreign('tanggallahirpasien')->references('id')->on('user');
            $table->string('keluhan_pasien',255);
            $table->dateTime('tanggal_pertemuan_pasien');
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
        Schema::dropIfExists('pertemuanpasien');
    }
}
