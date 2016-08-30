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
                        <td><span class="label label-{{$pinjam->status=='aktif' ? 'success' : 'danger' }}">{{ $pinjam->status }}</span></td>
                        <td>
                            {!! Form::model($pinjam, ['route' => ['kelola.akun.destroy', $pinjam], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                            <a href = "{{ route('kelola.akun.edit', $pinjam->id)}}" class="btn palette-Orange bg">Ubah</a> |
                            <button type="submit" class="btn palette-Red bg"> Batal</button>
                            {!! Form::close()!!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $pinjaman->appends(compact('q'))->links() }}
    </div>
</div>
@stop
