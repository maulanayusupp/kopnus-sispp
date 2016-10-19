@extends('layouts.app')

@section('title')Data Pembayaran
@stop
@section('content')
<div class="card">
    <div class="card-body card-padding">        
    	<center><b><h3>PINJAMAN KHUSUS ANGGOTA <br>({{ $pembayaran->nama }})</h3></b></center>

    	<hr>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>ID Pinjaman</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            <label class="control-label">{{ $pembayaran->pinjaman_id }}</label>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Tanggal Pembayaran</strong></label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            <label class="control-label">{{ $pembayaran->tanggal_pembayaran }}</label>
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
                            <label class="control-label">{{ $pembayaran->user_id }}</label>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Nama</strong></label>
                    <div class="col-sm-4">
                        <div class="fg-line">
                            <label class="control-label">{{ $pembayaran->nama }}</label>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Angsuran Ke - </strong></label>
                    <div class="col-sm-1">
                        <div class="fg-line">
                            <label class="control-label">{{ $pembayaran->angsuran_nomor }}</label>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Jumlah Tagihan</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            <label class="control-label">Rp {{ number_format($pembayaran->jumlah_tagihan) }}</label>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Jumlah Pembayaran</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            <label class="control-label">Rp {{ number_format($pembayaran->jumlah_pembayaran) }}</label>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Jumlah Pembayaran Terbilang</strong></label>
                    <div class="col-sm-6">
                        <div class="fg-line">
                            <label class="control-label">{{ $pembayaran->jumlah_pembayaran_terbilang }}</label>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Keterangan</strong></label>
                    <div class="col-sm-5">
                        <div class="fg-line">
                            <label class="control-label" rows="2">{{ $pembayaran->keterangan }}</label>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Status</strong></label>
                    <div class="col-sm-5">
                        <div class="fg-line">
                            <span class="label label-{{$pembayaran->status=='dibayar' ? 'success' : 'danger' }}">{{ $pembayaran->status }}</span>
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
                        <a href="{{ url('kelola/pembayaran') }}" class="btn btn-danger">Kembali</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@stop