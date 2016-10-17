<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    /* DATABASE TABLE */
	protected $table = 'pembayaran';
	/* FIELD */
    protected $fillable = [
		'user_id',
		'nama',
		'tanggal_pembayaran',
		'pinjaman_id',
		'angsuran_nomor',
		'jumlah_tagihan',
		'pokok',
		'bunga',
		'jumlah_pembayaran',
		'jumlah_pembayaran_terbilang',
		'cara_pembayaran',
		'keterangan',
		'status',
    ];
}
