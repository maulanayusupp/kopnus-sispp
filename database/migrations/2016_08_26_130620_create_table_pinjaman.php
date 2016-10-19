<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePinjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjaman', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('bunga_id');
            $table->foreign('bunga_id')->references('id')->on('bunga');
            $table->string('kantor_juru_bayar');
            $table->string('pengelola_pensiun');
            $table->string('no_surat_keputusan_pensiun');
            $table->string('no_identitas_pensiun');
            $table->string('jenis_pinjaman');
            $table->string('kegunaan_pinjaman');

            $table->integer('jumlah_pinjaman');
            $table->string('jumlah_pinjaman_terbilang');
            $table->integer('angsuran');
            $table->integer('jumlah_pinjaman_bunga');

            $table->integer('sisa_pinjaman');
            $table->string('status');
            $table->string('jangka_waktu_pinjam');
            $table->string('tanggal_lahir');
            $table->string('gaji');

            $table->string('nama_kreditur');
            $table->string('no_rek_kreditur');
            $table->integer('sisa_angsuran_kreditur');
            $table->integer('sisa_angsuran_bulan_kreditur');
            $table->integer('penghasilan_bulanan_kreditur');            
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
        Schema::drop('pinjaman');
    }
}
