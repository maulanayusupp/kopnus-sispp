<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
 /* DATABASE TABLE */
	protected $table = 'obat';
	/* FIELD */
    protected $fillable = [
        'nama', 'harga',
    ];
}
