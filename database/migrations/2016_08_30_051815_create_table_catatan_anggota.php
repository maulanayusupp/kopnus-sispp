<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCatatanAnggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatan-anggota', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('kepemilikan_rekening');
            $table->string('nomor_wesel_pos');
            $table->string('pemilik_nomor_wesel_pos');
            $table->string('nomor_rek_gol');
            $table->string('pemilik_nomor_rek_gol');
            $table->string('nomor_rek_tabungan');
            $table->string('pemilik_nomor_rek_tabungan');
            $table->string('nama_bank_penerima');
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
        Schema::drop('catatan-anggota');
    }
}
