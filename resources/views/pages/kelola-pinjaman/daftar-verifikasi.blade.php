@extends('layouts.app')

@section('title')Verifikasi Pinjaman
@stop

@section('content')

@if((App\Pinjaman::where('status','menunggu')->count() == 0 ))
<div class="card">
    <div class="card-header">
        <center><h2>Tidak ada Pinjaman</h2></center>
    </div>
</div>
@else
<div class="card">
    <div class="card-header">
        <h2>Daftar Peminjam</h2>  
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID Pinjaman</th>
                    <th>Nama Kreditur</th>
                    <th>ID Anggota</th>
                    <th>Jumlah Pinjaman</th>
                    <th>Jenis Pinjaman</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pinjaman as $pinjam)
                    <tr>
                        <td>{{ $pinjam->id }}</td>
                        <td>{{ $pinjam->nama_kreditur }}</td>
                        <td>{{ $pinjam->user_id }}</td>
                        <td>Rp {{ number_format($pinjam->jumlah_pinjaman) }}</td>
                        <td><span class="label label-{{$pinjam->jenis_pinjaman=='makro' ? 'info' : 'primary' }}">{{ $pinjam->jenis_pinjaman }}</span></td>
                        <td><span class="label label-{{$pinjam->status=='aktif' ? 'danger' : 'success' }}">{{ $pinjam->status }}</span></td>
                        <td>
                            <div class="form-inline">
                                <a href = "{{ route('kelola.pinjaman.show', $pinjam->id)}}" class="btn palette-Teal bg"> Lihat Data</a> | <a href = "{{ route('kelola.pinjaman.showverifikasi', $pinjam->id)}}" class="btn palette-Indigo bg"> Verifikasi Data</a>                                
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@stop