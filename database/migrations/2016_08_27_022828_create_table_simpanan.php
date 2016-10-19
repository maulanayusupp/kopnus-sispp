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
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('kartu_atm');
            $table->string('nomor_kartu_atm');
            $table->integer('nilai_penempatan');
            $table->string('nilai_penempatan_terbilang');
            $table->string('nota_perpanjangan');
            $table->string('nota_perpanjangan_dikirim');
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
