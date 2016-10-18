<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','status', 'simpanan_wajib', 'simpanan_pokok',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /* has one */
    public function dataAnggota() {
        return $this->hasOne('App\DataAnggota', 'user_id');
    }
    public function dataPekerjaan() {
        return $this->hasOne('App\DataPekerjaan', 'user_id');
    }
    public function CatatanAnggota() {
        return $this->hasOne('App\CatatanAnggota', 'user_id');
    }
    public function tabungan() {
        return $this->hasOne('App\Tabungan', 'user_id');
    }
    /* has many */
    public function simpanan() {
        return $this->hasMany('App\Simpanan', 'user_id');
    }
    public function pinjaman() {
        return $this->hasMany('App\Pinjaman', 'user_id');
    }
    public function pembayaran() {
        return $this->hasMany('App\Pembayaran', 'user_id');
    }
}
