<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatatanAnggota extends Model
{
    /* DATABASE TABLE */
	protected $table = 'catatan-anggota';
	/* FIELD */
    protected $fillable = [
		'user_id',
		'kepemilikan_rekening',
		'nomor_wesel_pos',
		'pemilik_nomor_wesel_pos',
		'nomor_rek_gol',
		'pemilik_nomor_rek_gol',
		'nomor_rek_tabungan',
		'pemilik_nomor_rek_tabungan',
		'nama_bank_penerima',
    ];
}
