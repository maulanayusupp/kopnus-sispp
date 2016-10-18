@extends('layouts.app')

@section('title')Kelola Pinjaman
@stop

@section('content')
{{-- PENCARIAN BERDASARKAN ID ANGGOTA/MEMBER --}}
<div class="card">
    <form class="form-horizontal" role="form" method="GET" action="{{ url('kelola/pinjaman') }}">
        <div class="card-body card-padding">
            <div class="form-group{{ $errors->has('q') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Cari Riwayat</label>
                <div class="col-sm-5">
                    <div class="fg-line">
                        <input type="text" class="form-control input-sm" name="q" placeholder="Cari riwayat berdasarkan ID Anggota">
                        @if ($errors->has('q'))
                            <span class="help-block">
                                <strong>{{ $errors->first('q') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Cari Riwayat Peminjaman</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="card">
    <div class="card-header">
        <h2>Daftar Riwayat Peminjaman <small>berikut daftar riwayat peminjaman yang telah dilakukan.</small></h2>  
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
                        <td>{{ $pinjam->user->name }}</td>
                        <td>{{ $pinjam->user_id }}</td>
                        <td>Rp {{ number_format($pinjam->jumlah_pinjaman) }}</td>
                        <td><span class="label label-{{$pinjam->jenis_pinjaman=='makro' ? 'info' : 'primary' }}">{{ $pinjam->jenis_pinjaman }}</span></td>
                        <td><span class="label label-{{$pinjam->status=='aktif' ? 'success' : 'danger' }}">{{ $pinjam->status }}</span></td>
                        <td>
                            <div class="form-inline">
                                <a href = "{{ route('kelola.pinjaman.show', $pinjam->id)}}" class="btn palette-Teal bg"> Lihat Data</a>
                                
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $pinjaman->appends(compact('q'))->links() }}
    </div>
</div>
@stop