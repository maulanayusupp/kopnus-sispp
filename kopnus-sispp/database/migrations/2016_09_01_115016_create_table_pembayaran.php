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
            $table->integer('user_id');
            $table->string('nama');
            $table->string('tanggal_pembayaran');
            $table->integer('pinjaman_id');
            $table->integer('angsuran_nomor');
            $table->integer('jumlah_tagihan');
            $table->integer('pokok');
            $table->integer('bunga');
            $table->integer('jumlah_pembayaran');
            $table->string('jumlah_pembayaran_terbilang');
            $table->string('cara_pembayaran');
            $table->string('keterangan');
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
