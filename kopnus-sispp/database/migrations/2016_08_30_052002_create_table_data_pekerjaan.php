<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataPekerjaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data-pekerjaan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('pekerjaan');
            $table->string('pekerjaan_lain');
            $table->string('penghasilan');
            $table->string('pengeluaran');
            $table->string('tempat_kerja');
            $table->string('jenis_pekerjaan');
            $table->string('alamat');
            $table->string('rt_rw');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('pos');
            $table->string('nomor_telepon_kantor');
            $table->string('ext');
            $table->string('fax');
            $table->string('jabatan');
            $table->string('lama_bekerja');
            $table->string('sumber_dana');
            $table->string('sumber_dana_lain');
            $table->string('tujuan_pembukaan_rekening');
            $table->string('tujuan_pembukaan_rekening_lain');
            $table->string('transaksi_pengambilan');
            $table->string('transaksi_penyetoran');
            $table->string('gaji_kotor');
            $table->string('gaji_bersih');
            $table->string('potongan_gaji_terakhir');
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
        Schema::drop('data-pekerjaan');
    }
}
