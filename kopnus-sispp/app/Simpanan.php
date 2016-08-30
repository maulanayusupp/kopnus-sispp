<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    protected  $table = 'simpanan';

    protected $fillable = [
        'user_id',
        'kartu_atm',
        'nomor_kartu_atm',
        'nilai_penempatan',
        'nilai_penempatan_terbilang',
        'jangka_waktu',
        'tingkat_imbalan',
        'status_perpanjangan',
        'nota_perpanjangan',
        'nota_perpanjangan_dikirim',
        'nama_referensi',
        'status',
    ];
}
