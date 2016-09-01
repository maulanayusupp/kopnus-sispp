<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTabungan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabungan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produk_id');
            $table->integer('user_id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('nik');
            $table->string('tanggal_lahir');
            $table->string('tanggal_pendaftaran');
            $table->string('nama_ibu_kandung');
            $table->string('jenis_kelamin');
            $table->integer('saldo_akhir');
            $table->string('status_rekening');
            $table->string('pin');
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
        Schema::drop('tabungan');
    }
}
