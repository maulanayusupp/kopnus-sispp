@extends('layouts.app')

@section('title')Data Simpanan
@stop

@section('content')
<div class="card">
    <div class="card-body card-padding">        
        <center><b><h3>SIMPANAN KHUSUS ANGGOTA</h3></b></center>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>ID Anggota</strong></label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            <label class="control-label">{{ $simpanan->tabungan->user->name }}</label>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Status Simpanan</strong></label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            <span class="label label-{{ $simpanan->status=='disimpan' ? 'success' : 'danger' }}">{{ $simpanan->status }}</span>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Nomor Kartu</strong></label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            <label class="control-label">{{ $simpanan->nomor_kartu_atm }}</label>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Nilai Penempatan</strong></label>
                    <div class="col-sm-5">
                        <div class="fg-line">
                            <label class="control-label">Rp {{ number_format($simpanan->nilai_penempatan) }} ({{ $simpanan->nilai_penempatan_terbilang }})</label>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Nama Referensi</strong></label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            <label class="control-label">{{ $simpanan->nama_referensi }}</label>
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
                        <a href="{{ url('simpanan/riwayat') }}" class="btn btn-danger">Kembali</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@stop