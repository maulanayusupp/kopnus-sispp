@extends('layouts.app')

@section('title')LAPORAN
@stop

@section('content')

<div class="card c-dark palette-Light-Blue bg">
    <div class="card-header">
        <h2>LAPORAN PINJAMAN<small><font color="white">Jumlah Pinjaman</font></small></h2>
        <a class="btn palette-Blue bg pull-right" href="{{ URL::to('kelola/laporan-pinjaman/xls') }}"> Download Laporan Pinjaman</a>
    </div>
    <div class="card-body card-padding">
        <h2 class="m-t-0 m-b-15 c-white">
            <i class="zmdi zmdi-caret-up-circle m-r-5"></i>
            {{ App\Pinjaman::count() }}
        </h2>

        <div class="sparkline-1 text-center"></div>
    </div>
</div>

<div class="card c-dark palette-Green-A700 bg">
    <div class="card-header">
        <h2>LAPORAN PEMBAYARAN<small><font color="white">Jumlah Pembayaran</font></small></h2>
        <a class="btn palette-Green bg pull-right" href="{{ URL::to('kelola/laporan-pembayaran/xls') }}"> Download Laporan Pembayaran</a>
    </div>
    <div class="card-body card-padding">
        <h2 class="m-t-0 m-b-15 c-white">
            <i class="zmdi zmdi-caret-up-circle m-r-5"></i>
            {{ App\Pembayaran::count() }}
        </h2>
        <div class="sparkline-2 text-center"></div>
    </div>
</div>

<div class="card c-dark palette-Blue-Grey bg">
    <div class="card-header">
        <h2>LAPORAN TABUNGAN<small><font color="white">Jumlah Tabungan</font></small></h2>
        <a class="btn palette-Blue-Grey bg pull-right" href="{{ URL::to('kelola/laporan-simpanan/xls') }}"> Download Laporan Tabungan</a>
    </div>
    <div class="card-body card-padding">
        <h2 class="m-t-0 m-b-15 c-white">
            <i class="zmdi zmdi-caret-down-circle m-r-5"></i>
            {{ App\Simpanan::count() }}
        </h2>
        <div class="sparkline-3 text-center"></div>
    </div>
</div>
@stop
