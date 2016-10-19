<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    protected  $table = 'tabungan';

    protected $fillable = [
        'produk_id',
		'user_id',
		'saldo_akhir',
		'status_rekening',
		'pin',
    ];

    public function produk() {
        return $this->hasOne('App\Produk', 'produk_id');
    }
    public function simpanan() {
        return $this->hasOne('App\Simpanan', 'tabungan_id');
    }
    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}

