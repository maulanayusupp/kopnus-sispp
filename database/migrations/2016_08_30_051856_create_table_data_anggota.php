<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataAnggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data-anggota', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('keperluan');
            $table->string('nama');
            $table->string('jenis_layanan_jasa');
            $table->string('nama_suami_istri');
            $table->string('nik');
            $table->string('nama_ibu_kandung');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->string('tanggal_lahir');
            $table->string('jumlah_tanggungan');
            $table->string('identitas_dimiliki');
            $table->string('nomor_identitas');
            $table->string('alamat_identitas');
            $table->string('rt_rw_identitas');
            $table->string('kelurahan_identitas');
            $table->string('kecamatan_identitas');
            $table->string('kota_identitas');
            $table->string('pos_identitas');
            $table->string('pendidikan_terakhir');
            $table->string('kewarganegaraan');
            $table->string('alamat_domisili');
            $table->string('rt_rw_domisili');
            $table->string('kelurahan_domisili');
            $table->string('kecamatan_domisili');
            $table->string('kota_domisili');
            $table->string('pos_domisili');
            $table->string('status_rumah');
            $table->string('kode_wilayah');
            $table->string('nomor_telepon');
            $table->string('nomor_hp');
            $table->string('alamat_surat_korespondensi');
            $table->string('email');
            $table->string('nama_lain');
            $table->string('hubungan');
            $table->string('nomor_telepon_lain');
            $table->string('alamat_lain');
            $table->string('rt_rw_lain');
            $table->string('kelurahan_lain');
            $table->string('kecamatan_lain');
            $table->string('kota_lain');
            $table->string('pos_lain');
            $table->text('sk');
            $table->text('ktp');
            $table->text('npwp');
            $table->text('kk');
            $table->text('struk_gaji');
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
        Schema::drop('data-anggota');
    }
}
