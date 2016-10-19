@extends('layouts.app')

@section('title')Data Peminjam
@stop
@section('content')
{!! Form::model($pinjaman, ['route' => ['kelola.pinjaman.verifikasi', $pinjaman],'method' =>'patch','role'=>'form','class'=>'form-horizontal'])!!}
    {!! csrf_field() !!}
    <div class="card">
        <div class="card-body card-padding">    
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <a href="{{ url('kelola/pinjaman') }}" class="btn btn-danger pull-left">Kembali</a>
                    </div>                    
                </div>
            </div>            
        	<center><b><h3>PINJAMAN KHUSUS ANGGOTA <br>({{ $pinjaman->user->name }})</h3></b></center>
        	<hr>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>Status pinjam</strong></label>
                        <div class="col-sm-2">
                            <div class="fg-line">
                                <select name="status" class="chosen">
                                    <option value="menunggu" selected="selected">Menunggu</option>
                                    <option VALUE="terima">Terima</option>
                                    <option VALUE="ditolak">Ditolak</option>
                                </select>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>ID Anggota</strong></label>
                        <div class="col-sm-3">
                            <div class="fg-line">
                                <label class="control-label">{{ $pinjaman->user_id }}</label>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>Umur</strong></label>
                        <div class="col-sm-5">
                            <div class="fg-line">
                                <label class="control-label">
                                    <?php $interval = date_diff(date_create(), date_create($pinjaman->tanggal_lahir)) ?>
                                    {{ $interval->format('%Y Tahun %M Bulan %d Hari') }} - Kelahiran ({{ $pinjaman->tanggal_lahir }})
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>Gaji</strong></label>
                        <div class="col-sm-2">
                            <div class="fg-line">
                                <label class="control-label">Rp. {{ number_format($pinjaman->gaji) }}</label>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>Kantor Juru Bayar</strong></label>
                        <div class="col-sm-3">
                            <div class="fg-line">
                                <label class="control-label">{{ $pinjaman->kantor_juru_bayar }}</label>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>Pengelola Pensiun</strong></label>
                        <div class="col-sm-3">
                            <div class="fg-line">
                                <label class="control-label">{{ $pinjaman->pengelola_pensiun }}</label>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>No. Surat Keputusan Pensiun</strong></label>
                        <div class="col-sm-3">
                            <div class="fg-line">
                                <label class="control-label">{{ $pinjaman->no_surat_keputusan_pensiun }}</label>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>No. Kartu Identitas Pensiun</strong></label>
                        <div class="col-sm-3">
                            <div class="fg-line">
                                <label class="control-label">{{ $pinjaman->no_identitas_pensiun }}</label>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>Jenis Pinjaman</strong></label>
                        <div class="col-sm-3">
                            <div class="fg-line">
                                <label class="control-label">{{ $pinjaman->jenis_pinjaman }}</label>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>Kegunaan Pinjaman</strong></label>
                        <div class="col-sm-3">
                            <div class="fg-line">
                                <label class="control-label">{{ $pinjaman->kegunaan_pinjaman }}</label>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>Jumlah Pinjaman yang diajukan</strong></label>
                        <div class="col-sm-5">
                            <div class="fg-line">
                                <label class="control-label">Rp {{ number_format($pinjaman->jumlah_pinjaman) }} ({{ $pinjaman->jumlah_pinjaman_terbilang }})</label>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>Jangka Waktu Pinjam</strong></label>
                        <div class="col-sm-3">
                            <div class="fg-line">
                                <label class="control-label">{{ $pinjaman->jangka_waktu_pinjam }} (Bulan)</label>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>Total Pinjaman</strong></label>
                        <div class="col-sm-5">
                            <div class="fg-line">
                                <label class="control-label"><strong>Rp {{ number_format($pinjaman->jumlah_pinjaman_bunga) }}</strong></label>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>Angsuran</strong></label>
                        <div class="col-sm-5">
                            <div class="fg-line">
                                <label class="control-label"><strong>Rp {{ number_format($pinjaman->angsuran) }}</strong></label>
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
                            <button type="submit" class="btn btn-primary"> VERIFIKASI</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}
@stop