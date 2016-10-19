<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    protected  $table = 'simpanan';

    protected $fillable = [
        'tabungan_id',
        'nomor_kartu_atm',
        'nilai_penempatan',
        'nilai_penempatan_terbilang',
        'nama_referensi',
        'status',
    ];

    public function tabungan() {
        return $this->belongsTo('App\Tabungan', 'tabungan_id');
    }
}
