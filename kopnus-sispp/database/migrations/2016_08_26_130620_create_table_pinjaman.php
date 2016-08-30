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
            $table->string('user_id');
            $table->string('kantor_juru_bayar');
            $table->string('pengelola_pensiun');
            $table->string('no_surat_keputusan_pensiun');
            $table->string('no_identitas_pensiun');
            $table->string('jenis_pinjaman');
            $table->string('kegunaan_pinjaman');
            $table->integer('jumlah_pinjaman');
            $table->string('jumlah_pinjaman_terbilang');
            $table->string('jangka_waktu_pinjam');
            $table->string('nama_kreditur');
            $table->string('no_rek_kreditur');
            $table->integer('sisa_angsuran_kreditur');
            $table->integer('sisa_angsuran_bulan_kreditur');
            $table->integer('penghasilan_bulanan_kreditur');
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
        Schema::drop('pinjaman');
    }
}
