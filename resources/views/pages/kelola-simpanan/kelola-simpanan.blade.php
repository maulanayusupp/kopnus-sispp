@extends('layouts.app')

@section('title')Kelola Simpanan
@stop

@section('content')
<div class="card">
    <form class="form-horizontal" role="form" method="GET" action="{{ url('kelola/simpanan') }}">
        <div class="card-body card-padding">
            <div class="form-group{{ $errors->has('q') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Cari Riwayat</label>
                <div class="col-sm-5">
                    <div class="fg-line">
                        <input type="text" class="form-control input-sm" name="q" placeholder="Cari riwayat berdasarkan ID Simpanan">
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
                    <button type="submit" class="btn btn-primary">Cari Riwayat Simpanan</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="card">
    <div class="card-header">
        <h2>Daftar Riwayat Simpanan <small>berikut daftar riwayat simpanan yang telah dilakukan.</small></h2>  
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID Simpanan</th>
                    <th>ID Anggota</th>
                    <th>Jumlah Simpanan</th>
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
                        <td><span class="label label-{{ $simpan->status=='aktif' ? 'success' : 'danger' }}">{{ $simpan->status }}</span></td>
                        <td>
                            <a href = "{{ route('kelola.simpanan.show', $simpan->id)}}" class="btn palette-Blue bg"> Lihat Data</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $simpanan->appends(compact('q'))->links() }}
    </div>
</div>
@stop
