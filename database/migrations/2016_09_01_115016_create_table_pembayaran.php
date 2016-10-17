<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('pinjaman_id');
            $table->foreign('pinjaman_id')->references('id')->on('pinjaman');
            $table->string('nama');
            $table->string('tanggal_pembayaran');            
            $table->integer('angsuran_nomor');
            $table->integer('jumlah_tagihan');
            $table->integer('pokok');
            $table->integer('bunga');
            $table->integer('jumlah_pembayaran');
            $table->string('jumlah_pembayaran_terbilang');
            $table->string('cara_pembayaran');
            $table->string('keterangan');
            $table->integer('sisa_pinjaman');
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
        Schema::drop('pembayaran');
    }
}
