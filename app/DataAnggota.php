<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataAnggota extends Model
{
    protected  $table = 'data-anggota';

    protected $fillable = [
        'keperluan',
		'user_id',
		'nama',
		'jenis_layanan_jasa',
		'nama_suami_istri',
		'nik',
		'nama_ibu_kandung',
		'agama',
		'jenis_kelamin',
		'tanggal_lahir',
		'jumlah_tanggungan',
		'identitas_dimiliki',
		'nomor_identitas',
		'alamat_identitas',
		'rt_rw_identitas',
		'kelurahan_identitas',
		'kecamatan_identitas',
		'kota_identitas',
		'pos_identitas',
		'pendidikan_terakhir',
		'kewarganegaraan',
		'npwp',
		'alamat_domisili',
		'rt_rw_domisili',
		'kelurahan_domisili',
		'kecamatan_domisili',
		'kota_domisili',
		'pos_domisili',
		'status_rumah',
		'kode_wilayah',
		'nomor_telepon',
		'nomor_hp',
		'alamat_surat_korespondensi',
		'email',
		'nama_lain',
		'hubungan',
		'nomor_telepon_lain',
		'alamat_lain',
		'rt_rw_lain',
		'kelurahan_lain',
		'kecamatan_lain',
		'kota_lain',
		'pos_lain',
		'sk',
		'ktp',
		'npwp',
		'kk',
		'struk_gaji',
    ];

    public function user() {
    	return $this->belongsTo('App\User', 'user_id');
	}
}
