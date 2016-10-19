<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSimpanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simpanan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tabungan_id');
            $table->foreign('tabungan_id')->references('id')->on('tabungan');
            $table->string('kartu_atm');
            $table->string('nomor_kartu_atm');
            $table->integer('nilai_penempatan');
            $table->string('nilai_penempatan_terbilang');
            $table->string('nama_referensi');
            $table->string('status');
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
        Schema::drop('simpanan');
    }
}
