@extends('layouts.app')

@section('title')Verifikasi Simpanan
@stop

@section('content')

@if((App\Simpanan::where('status','menunggu')->count() == 0 ))
<div class="card">
    <div class="card-header">
        <center><h2>Tidak ada Simpanan</h2></center>
    </div>
</div>
@else
<div class="card">
    <div class="card-header">
        <h2>Daftar Simpanan</h2>  
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID Simpanan</th>
                    <th>ID Anggota</th>
                    <th>Jumlah Simpanan</th>
                    <th>Jangka Waktu</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($simpanan as $simpan)
                    <tr>
                        <td>{{ $simpan->id }}</td>
                        <td>{{ $simpan->user_id }}</td>
                        <td>Rp {{ number_format($simpan->nilai_penempatan) }}</td>
                        <td>{{ $simpan->jangka_waktu .' Bulan' }}</td>
                        <td><span class="label label-{{ $simpan->status=='aktif' ? 'success' : 'danger' }}">{{ $simpan->status }}</span></td>
                        <td>
                            <a href = "{{ route('kelola.simpanan.show', $simpan->id)}}" class="btn palette-Blue bg"> Lihat Data</a> |
                            <a href = "{{ route('kelola.simpanan.showverifikasi', $simpan->id)}}" class="btn palette-Orange bg">Verifikasi Data</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@stop
