@extends('layouts.app')

@section('title')Verifikasi Data Simpanan
@stop

@section('content')
{!! Form::model($simpanan, ['route' => ['kelola.simpanan.verifikasi', $simpanan],'method' =>'patch','role'=>'form','class'=>'form-horizontal'])!!}
    {!! csrf_field() !!}
    <div class="card">
        <div class="card-body card-padding">    
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <a href="{{ url('kelola/simpanan') }}" class="btn btn-danger pull-left">Kembali</a>
                    </div>                    
                </div>
            </div>

            <center><b><h3>SIMPANAN KHUSUS ANGGOTA</h3></b></center>
            <hr>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>ID Anggota</strong></label>
                        <div class="col-sm-2">
                            <div class="fg-line">
                                <label class="control-label">{{ $simpanan->user_id }}</label>
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
                                <select name="status" class="chosen">
                                    <option value="menunggu" selected="selected">Menunggu</option>
                                    <option value="aktif">Aktif</option>
                                    <option VALUE="terima">Terima</option>
                                    <option VALUE="tidak diterima">Tidak Diterima</option>
                                </select>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>Kartu ATM</strong></label>
                        <div class="col-sm-2">
                            <div class="fg-line">
                                <label class="control-label">{{ $simpanan->kartu_atm }}</label>
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
                        <label class="col-sm-3 control-label"><strong>Jangka Waktu</strong></label>
                        <div class="col-sm-2">
                            <div class="fg-line">
                                <label class="control-label">{{ $simpanan->jangka_waktu }} (Bulan)</label>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>Tingkat Imbalan</strong></label>
                        <div class="col-sm-2">
                            <div class="fg-line">
                                <label class="control-label">{{ $simpanan->tingkat_imbalan }} % Pertahun</label>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>Status Perpanjangan</strong></label>
                        <div class="col-sm-2">
                            <div class="fg-line">
                                <label class="control-label">{{ $simpanan->status_perpanjangan }}</label>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>Nota Perpanjangan</strong></label>
                        <div class="col-sm-2">
                            <div class="fg-line">
                                <label class="control-label">{{ $simpanan->nota_perpanjangan }}</label>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>Nota Perpanjangan Dikirim</strong></label>
                        <div class="col-sm-2">
                            <div class="fg-line">
                                <label class="control-label">{{ $simpanan->nota_perpanjangan_dikirim }}</label>
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
                            <button type="submit" class="btn btn-primary">Verifikasi</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}
@stop