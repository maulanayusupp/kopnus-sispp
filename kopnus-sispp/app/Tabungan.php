<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    protected  $table = 'tabungan';

    protected $fillable = [
        'produk_id',
		'user_id',
		'nama',
		'alamat',
		'kelurahan',
		'kecamatan',
		'nik',
		'tanggal_lahir',
		'tanggal_pendaftaran',
		'nama_ibu_kandung',
		'jenis_kelamin',
		'saldo_akhir',
		'status_rekening',
		'pin',
    ];
}

