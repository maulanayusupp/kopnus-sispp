@extends('layouts.app')

@section('title')Kelola Produk
@stop

@section('content')

<div class="card">
    <form class="form-horizontal" role="form" method="GET" action="{{ url('kelola/produk') }}">
        <div class="card-body card-padding">
            <div class="form-group{{ $errors->has('q') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Cari Produk</label>
                <div class="col-sm-5">
                    <div class="fg-line">
                        <input type="text" class="form-control input-sm" name="q" placeholder="Cari Produk berdasarkan ID">
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
                    <button type="submit" class="btn btn-primary">Cari Produk</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="card">
    <div class="card-header">
        <h2>Daftar produk yang terdapat pada sistem: {{ App\Produk::count() }}</h2><a class="btn btn-primary pull-right" href="{{ URL::to('kelola/produk/create') }}"> Tambah Produk</a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>ID Produk</th>
                    <th>Nama Produk</th>                    
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{--*/ $no=1 /*--}}
                @foreach($data as $produk)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $produk->id }}</td>
                        <td>{{ $produk->nama }}</td>
                        <td>
                            {!! Form::model($produk, ['route' => ['kelola.produk.destroy', $produk], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                            <a href = "{{ route('kelola.produk.edit', $produk->id)}}" class="btn palette-Orange bg">Ubah Produk</a> |
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
