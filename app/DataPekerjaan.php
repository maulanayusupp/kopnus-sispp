<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPekerjaan extends Model
{
	/* DATABASE TABLE */
	protected $table = 'data-pekerjaan';
	/* FIELD */
    protected $fillable = [
		'user_id',
		'pekerjaan',
		'pekerjaan_lain',
		'penghasilan',
		'pengeluaran',
		'tempat_kerja',
		'jenis_pekerjaan',
		'alamat',
		'rt_rw',
		'kelurahan',
		'kecamatan',
		'kota',
		'pos',
		'nomor_telepon_kantor',
		'ext',
		'fax',
		'jabatan',
		'lama_bekerja',
		'sumber_dana',
		'sumber_dana_lain',
		'tujuan_pembukaan_rekening',
		'tujuan_pembukaan_rekening_lain',
		'transaksi_pengambilan',
		'transaksi_penyetoran',
		'gaji_kotor',
		'gaji_bersih',
		'potongan_gaji_terakhir',
    ];
}
