<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    /* DATABASE TABLE */
	protected $table = 'barang';
	/* FIELD */
    protected $fillable = [
        'nama', 'harga',
    ];
}
