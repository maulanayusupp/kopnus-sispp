@extends('layouts.app')

@section('title')Kelola Bunga
@stop

@section('content')

<div class="card">
    <form class="form-horizontal" role="form" method="GET" action="{{ url('kelola/bunga') }}">
        <div class="card-body card-padding">
            <div class="form-group{{ $errors->has('q') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Cari bunga</label>
                <div class="col-sm-5">
                    <div class="fg-line">
                        <input type="text" class="form-control input-sm" name="q" placeholder="Cari Bunga berdasarkan ID">
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
                    <button type="submit" class="btn btn-primary">Cari Bunga</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="card">
    <div class="card-header">
        <h2>Daftar bunga <a class="btn btn-primary pull-right" href="{{ URL::to('kelola/bunga/create') }}"> Tambah bunga</a>
            <small>berikut daftar bunga yang terdaftar pada sistem.</small></h2>  
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Bunga</th>
                    <th>Nama Bunga</th>                    
                    <th>Lama Pinjam</th>
                    <th>Jumlah Bulan</th>
                    <th>Bunga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{--*/ $no=1 /*--}}
                @foreach($data as $bunga)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $bunga->id }}</td>
                        <td>
                            <span class="label label-{{$bunga->nama=='admin' ? 'danger' : 'primary' }}">{{ $bunga->nama }}</span>
                        </td>
                        
                        <th>{{ $bunga->tahun_bunga }} Tahun</th>
                        <th>{{ $bunga->bulan_bunga }} Bulan</th>
                        <td>
                            <span class="label label-info">{{ $bunga->bunga. " %" }}</span>
                        </td>
                        <td>
                            {!! Form::model($bunga, ['route' => ['kelola.bunga.destroy', $bunga], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                            <a href = "{{ route('kelola.bunga.edit', $bunga->id)}}" class="btn palette-Orange bg">Ubah</a> |
                            <button type="submit" class="btn palette-Red bg"> Hapus</button>
                            {!! Form::close()!!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->appends(compact('q'))->links() }}
    </div>
</div>
@stop

@section('js')
@stop
