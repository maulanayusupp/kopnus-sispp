@extends('layouts.app')

@section('title')Riwayat Pinjaman
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Daftar Riwayat Peminjaman <small>berikut daftar riwayat peminjaman yang telah anda lakukan.</small></h2>  
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
                    <th><center>Aksi</center></th>
                </tr>
            </thead>
            <tbody>
                @foreach($pinjaman as $pinjam)
                    <tr>
                        <td>{{ $pinjam->id }}</td>
                        <td>{{ $pinjam->user->name }}</td>
                        <td>{{ $pinjam->user_id }}</td>
                        <td>Rp {{ number_format($pinjam->jumlah_pinjaman) }}</td>
                        <td><span class="label label-{{$pinjam->jenis_pinjaman=='makro' ? 'info' : 'primary' }}">{{ $pinjam->jenis_pinjaman }}</span></td>
                        <td><span class="label label-{{$pinjam->status=='aktif' ? 'success' : 'danger' }}">{{ $pinjam->status }}</span></td>
                        <td>
                            @if($pinjam->status=='menunggu')
                                {!! Form::model($pinjam, ['route' => ['pinjaman.pinjaman.destroy', $pinjam], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                                <a href = "{{ route('pinjaman.pinjaman.edit', $pinjam->id)}}" class="btn palette-Orange bg">Ubah Pinjaman</a> |
                                <button type="submit" class="btn palette-Red bg"> Batal Pinjam</button>
                                {!! Form::close()!!}
                            @else
                                <a href = "{{ route('pinjaman.pinjaman.show', $pinjam->id)}}" class="btn palette-Blue bg">Lihat Data Pinjaman</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
