@extends('layouts.app')

@section('title')Home
@stop

@section('content')
{{-- CEK USER SUDAH LOGIN --}}
@if(Auth::check())
    {{-- CEK STATUS USER SUDAH AKTIF --}}
    @if((Auth::user()->status) =='belum-aktif')
        <div class="container">
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Harap melakukan aktivasi terlebih dahulu untuk dapat melakukan proses pada sistem dengan mengisi semua form pada menu aktivasi. aktivasi dapat dilakukan dengan mengakses halaman <a href="{{ route('aktivasi.edit', encrypt(Auth::user()->id) )}}">Aktivasi Akun</a>.
                <ol>
                    <li>Mengisi Data Anggota</li>
                    <li>Mengisi Data Pekerjaan</li>
                    <li>Mengisi Data Catatan Anggota</li>
                    <li>Mengisi Data Pembuatan Tabungan</li>
                </ol>
                Pastikan data yang dimasukkan secara valid dan cek kembali data yang telah diisi dengan seksama.
            </div>
        </div>
    @endif
@endif
{{-- SELAMAT DATANG DI SISTEM --}}
<div class="card palette-White bg">
    <div class="card-header">
        <h1><center>Selamat Datang di <br>Sistem Informasi Simpan Pinjam Pensiun</center></h1>
        <center><img src="{{ asset('assets/img/logo.png') }}" class="img-responsive"></center>
    </div>
</div>
@stop
