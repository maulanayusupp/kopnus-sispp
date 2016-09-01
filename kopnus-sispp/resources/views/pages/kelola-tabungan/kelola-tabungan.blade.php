@extends('layouts.app')

@section('title')Kelola Tabungan Member
@stop

@section('content')

@if(App\Tabungan::count() == 0)
<div class="card">
    <div class="card-header">
        <center><h2>Belum ada Tabungan </h2></center>
    </div>
</div>
@else
{{-- PENCARIAN --}}
<div class="card">
    <form class="form-horizontal" role="form" method="GET" action="{{ url('kelola/tabungan') }}">
        <div class="card-body card-padding">
            <div class="form-group{{ $errors->has('q') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Cari Tabungan</label>
                <div class="col-sm-7">
                    <div class="fg-line">
                        <input type="text" class="form-control input-sm" name="q" placeholder="Cari Tabungan berdasarkan Nomor Rekening">
                        @if ($errors->has('q'))
                            <span class="help-block">
                                <strong>{{ $errors->first('q') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-sm-3">
                    <a class="btn btn-success pull-right" href="{{ URL::to('kelola/tabungan/create') }}"> Buat Tabungan Baru</a>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Cari Tabungan</button>
                </div>
            </div>
        </div>
    </form>
</div>
{{-- DAFTAR TABUNGAN --}}
<div class="card">
    <div class="card-header">
        <h2>Daftar Tabungan </h2>  
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>ID Anggota</th>
                    <th>Nama</th>
                    <th>Produk</th>                    
                    <th>No. Rekening</th>
                    <th>Status Rekening</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{--*/ $no=1 /*--}}
                @foreach($tabungans as $tabungan)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $tabungan->user_id }}</td>
                        <td>{{ $tabungan->nama }}</td>
                        <td>{{ $tabungan->produk_id }}</td>                        
                        <td>{{ $tabungan->id }}</td>
                        <td><span class="label label-{{$tabungan->status_rekening=='aktif' ? 'success' : 'warning' }}">
                            {{ $tabungan->status_rekening }}</span>
                        </td>
                        <td>
                            <a href = "{{ route('kelola.tabungan.show', $tabungan->id)}}" class="btn palette-Blue bg">Lihat Rekening</a> |
                            <a href = "{{ route('kelola.tabungan.edit', $tabungan->id)}}" class="btn palette-Red bg">Ubah Data</a>
                            {!! Form::close()!!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $tabungans->appends(compact('q'))->links() }}
    </div>
</div>
@endif
@stop

@section('js')
@stop
