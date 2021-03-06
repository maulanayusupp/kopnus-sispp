@extends('layouts.app')

@section('title')Verifikasi Pembayaran
@stop

@section('content')

@if((App\Pembayaran::where('status','menunggu')->count() == 0 ))
<div class="card">
    <div class="card-header">
       <center><h2>Belum ada pembayaran yang dilakukan</h2></center>
    </div>
</div>
@else
<div class="card">
    <div class="card-header">
        <h2>Daftar Riwayat Pembayaran <small>berikut daftar riwayat pembayaran yang telah anda lakukan.</small></h2>  
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th width="10%">ID Pembayaran</th>
                    <th>Nama</th>
                    <th>Pinjaman</th>
                    <th>Jumlah Pembayaran</th>
                    <th>Cara Pembayaran</th>
                    <th>Status</th>
                    <th><center>Aksi</center></th>
                </tr>
            </thead>
            <tbody>
                @foreach($pembayarans as $pembayaran)
                    <tr>
                        <td>{{ $pembayaran->id }}</td>
                        <td>{{ $pembayaran->nama }}</td>
                        <td>{{ $pembayaran->pinjaman_id }}</td>
                        <td>Rp {{ number_format($pembayaran->jumlah_pembayaran) }}</td>
                        <td><span class="label label-{{$pembayaran->jenis_pinjaman=='Tunai' ? 'info' : 'primary' }}">{{ $pembayaran->cara_pembayaran }}</span></td>
                        <td><span class="label label-{{$pembayaran->status=='dibayar' ? 'success' : 'danger' }}">{{ $pembayaran->status }}</span></td>
                        <td>
                            @if($pembayaran->status=='menunggu')
                                {!! Form::model($pembayaran, ['route' => ['kelola.pembayaran.destroy', $pembayaran], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                                <a href = "{{ route('kelola.pembayaran.showverifikasi', $pembayaran->id)}}" class="btn palette-Indigo bg">Verifikasi</a> | 
                                <button type="submit" class="btn palette-Red bg"> Batalkan</button>
                                {!! Form::close()!!}
                            @else
                                <a href = "{{ route('kelola.pembayaran.show', $pembayaran->id)}}" class="btn palette-Blue bg">Lihat Data Pembayaran</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@stop