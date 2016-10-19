@extends('layouts.app')

@section('title')Data Rekening Tabungan
@stop
@section('content')
<div class="card">
    <div class="card-body card-padding">        
    	<center><b><h3>REKENING TABUNGAN <br>({{ $tabungan->nama }})</h3></b></center>

    	<hr>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Nama</strong></label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            <label class="control-label">{{ $tabungan->user->name }}</label>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>ID Anggota</strong></label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            <label class="control-label">{{ $tabungan->user_id }}</label>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Produk</strong></label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            <label class="control-label">{{ $tabungan->produk_id }}</label>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Saldo Akhir</strong></label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            <label class="control-label">Rp {{ number_format($tabungan->saldo_akhir) }}</label>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Status Rekening</strong></label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            <span class="label label-{{$tabungan->status_rekening=='aktif' ? 'success' : 'warning' }}">
                            {{ $tabungan->status_rekening }}</span>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <center>
                        <a href="{{ url('kelola/tabungan') }}" class="btn btn-danger">Kembali</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@stop