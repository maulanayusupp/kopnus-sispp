<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
	protected  $table = 'pinjaman';

    protected $fillable = [
        'user_id',
        'bunga_id',
        'kantor_juru_bayar',
        'pengelola_pensiun',
        'no_surat_keputusan_pensiun',
        'no_identitas_pensiun',
        'jenis_pinjaman',
        'kegunaan_pinjaman',
        'jumlah_pinjaman',
        'jumlah_pinjaman_terbilang',
        'jumlah_pinjaman_bunga',
        'angsuran',        
        'jangka_waktu_pinjam',
        'nama_kreditur',
        'tanggal_lahir',
        'gaji',
        'no_rek_kreditur',
        'sisa_angsuran_kreditur',
        'sisa_angsuran_bulan_kreditur',
        'penghasilan_bulanan_kreditur',
        'sisa_pinjaman',
        'status',
    ];

    public function bunga() {
        return $this->belongsTo('App\Bunga', 'bunga_id');
    }

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function pembayaran() {
        return $this->hasMany('App\Pembayaran', 'pinjaman_id');
    }
    
}
