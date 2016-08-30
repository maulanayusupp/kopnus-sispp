<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    /* DATABASE TABLE */
	protected $table = 'produk';
	/* FIELD */
    protected $fillable = [
        'nama',
    ];
}
