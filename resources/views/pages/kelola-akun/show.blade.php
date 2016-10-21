@extends('layouts.app')

@section('title')Data Anggota
@stop
@section('content')
<div class="card">
    <div class="card-body card-padding">        
    	<center><b><h3>DATA ANGGOTA <br>({{ $user->name }})</h3></b></center>

    	<hr>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Status Anggota</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            <span class="label label-{{$user->status=='aktif' ? 'success' : 'danger' }}">{{ $user->status }}</span>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Nama Anggota</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->name }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>E-Mail</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->email }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Tanggal Daftar</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->created_at }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Simpanan Wajib</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            <span class="label label-{{$user->simpanan_wajib==50000 ? 'success' : 'danger' }}">{{ $user->simpanan_wajib==50000 ? 'Dibayar' : 'Belum Dibayar'}}</span>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Simpanan Pokok</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            <span class="label label-{{$user->simpanan_pokok==5000 ? 'success' : 'danger' }}">{{ $user->simpanan_pokok==5000 ? 'Dibayar' : 'Belum Dibayar'}}</span>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Surat Keterangan Pensiun</strong></label>
                    <div class="col-sm-9">
                        <div class="fg-line">
                            <img class="img-responsive" src="{{ asset('dokumen/' . ($user->dataAnggota->skp != null ? $user->dataAnggota->skp : '' )) }}">
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Kartu Tanda Penduduk</strong></label>
                    <div class="col-sm-9">
                        <div class="fg-line">
                            <img class="img-responsive" src="{{ asset('dokumen/' . ($user->dataAnggota->ktp != null ? $user->dataAnggota->ktp : '' )) }}">
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Nomor Pokok Wajib Pajak</strong></label>
                    <div class="col-sm-9">
                        <div class="fg-line">
                            <img class="img-responsive" src="{{ asset('dokumen/' . ($user->dataAnggota->npwp != null ? $user->dataAnggota->npwp : '' )) }}">
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Kartu Keluarga</strong></label>
                    <div class="col-sm-9">
                        <div class="fg-line">
                            <img class="img-responsive" src="{{ asset('dokumen/' . ($user->dataAnggota->kk != null ? $user->dataAnggota->kk : '' )) }}">
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Struk Gaji</strong></label>
                    <div class="col-sm-9">
                        <div class="fg-line">
                            <img class="img-responsive" src="{{ asset('dokumen/' . ($user->dataAnggota->struk_gaji != null ? $user->dataAnggota->struk_gaji : '' )) }}">
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
                        <a href="{{ url('kelola/akun') }}" class="btn btn-danger">KEMBALI</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@stop