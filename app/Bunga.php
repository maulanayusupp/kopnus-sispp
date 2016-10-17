<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bunga extends Model
{
	/* DATABASE TABLE */
	protected $table = 'bunga';
	/* FIELD */
    protected $fillable = [
        'nama', 'bunga','tahun_bunga','bulan_bunga',
    ];

    public function pinjaman() {
    	return $this->hasMany('App\Pinjaman', 'bunga_id');
	}
}
