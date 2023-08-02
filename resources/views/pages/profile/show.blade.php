@extends('layouts.app')

@section('title')Data Anggota
@stop
@section('content')
<div class="card">
    <div class="card-body card-padding">        
    	<center><b><h3>DATA ANGGOTA <br>({{ $user->name }})</h3></b></center>

    	<hr>

        <h2> Data Anggota</h2>

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
                    <label class="col-sm-3 control-label"><strong>Keperluan</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota ? $user->dataAnggota->keperluan : '' }}
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
                            {{ $user->id }}
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
                            <span class="label label-{{$user->simpanan_wajib == 50000 ? 'success' : 'danger' }}">{{ $user->simpanan_wajib == 50000 ? 'Dibayar' : 'Belum Dibayar'}}</span>
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
                            <span class="label label-{{$user->simpanan_pokok == 5000 ? 'success' : 'danger' }}">{{ $user->simpanan_pokok == 5000 ? 'Dibayar' : 'Belum Dibayar'}}</span>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Jenis Layanan Jasa</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota->jenis_layanan_jasa ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Nama Suami/Istri</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota->nama_suami_istri ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>NIK</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota->nik ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Nama Ibu Kandung</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota->nama_ibu_kandung ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Agama</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota->agama ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Jenis Kelamin</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota->jenis_kelamin ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Tanggal Lahir</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota->tanggal_lahir ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Jumlah Tanggungan</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota->jumlah_tanggungan ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Identitas</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota->identitas_dimiliki ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Nomor Identitas</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota->nomor_identitas ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Alamat</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota->alamat_identitas ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>RT/RW</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota->rt_rw_identitas ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Kelurahan</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota->kelurahan_identitas ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Kecamatan</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota->kecamatan_identitas ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Kota</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota->kota_identitas ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Pos</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota->pos_identitas ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Pendidikan Terakhir</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota->pendidikan_terakhir ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Kewarganegaraan</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota->kewarganegaraan ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Nomor NPWP</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataAnggota->no_npwp ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>     
        <h2> Data Pekerjaan</h2>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Pekerjaan</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataPekerjaan->pekerjaan ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Pekerjaan Lain</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataPekerjaan->pekerjaan_lain ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Penghasilan</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            Rp. {{ number_format($user->dataPekerjaan->penghasilan ?? 0) }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Pengeluaran</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            Rp. {{ number_format($user->dataPekerjaan->pengeluaran ?? 0) }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Tempat Kerja</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataPekerjaan->tempat_kerja ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Jenis Pekerjaan</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataPekerjaan->jenis_pekerjaan ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Alamat</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataPekerjaan->alamat ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>RT/RW</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataPekerjaan->rt_rw ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Kelurahan</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataPekerjaan->kelurahan ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Kecamatan</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataPekerjaan->kecamatan ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Kota</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataPekerjaan->kota ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Pos</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataPekerjaan->pos ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Nomor Telepon Kantor</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataPekerjaan->nomor_telepon_kantor ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Jabatan</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataPekerjaan->jabatan ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Lama Bekerja</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataPekerjaan->lama_bekerja ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Sumber Dana Lain</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataPekerjaan->sumber_dana ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Sumber Data Lain</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {{ $user->dataPekerjaan->sumber_dana_lain ?? '' }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Gaji Kotor</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            Rp. {{ number_format($user->dataPekerjaan->gaji_kotor ?? 0) }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Gaji Bersih</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            Rp. {{ number_format($user->dataPekerjaan->gaji_bersih ?? 0) }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Potongan Gaji Terakhir</strong></label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            RP. {{ number_format($user->dataPekerjaan->potongan_gaji_terakhir ?? 0) }}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <h2> Lampiran</h2>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><strong>Surat Keterangan Pensiun</strong></label>
                    <div class="col-sm-9">
                        <div class="fg-line">
                            <img class="img-responsive" src="{{ asset('dokumen/' . (isset($user->dataAnggota->skp) ? $user->dataAnggota->skp : 'document.png' )) }}">
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
                            <img class="img-responsive" src="{{ asset('dokumen/' . (isset($user->dataAnggota->ktp) ? $user->dataAnggota->ktp : 'document.png' )) }}">
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
                            <img class="img-responsive" src="{{ asset('dokumen/' . (isset($user->dataAnggota->npwp) ? $user->dataAnggota->npwp : 'document.png' )) }}">
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
                            <img class="img-responsive" src="{{ asset('dokumen/' . (isset($user->dataAnggota->kk) ? $user->dataAnggota->kk : 'document.png' )) }}">
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
                            <img class="img-responsive" src="{{ asset('dokumen/' . (isset($user->dataAnggota->struk_gaji) ? $user->dataAnggota->struk_gaji : 'document.png' )) }}">
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
                        <a href="{{ url('home') }}" class="btn btn-danger">KEMBALI</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@stop