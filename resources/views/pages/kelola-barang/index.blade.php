@extends('layouts.app')

@section('title')Kelola Barang
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <h2>Daftar Akun <a class="btn btn-primary pull-right" href="{{ URL::to('kelola/barang/create') }}"> Tambah Barang</a>
                <small>berikut daftar akun yang terdaftar pada sistem.</small></h2>  
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{--*/ $no=1 /*--}}
                    @foreach($barangs as $barang)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $barang->nama }}</td>
                            <td>{{ $barang->harga }}</td>
                            <td>
                                {!! Form::model($barang, ['route' => ['kelola.barang.destroy', $barang], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                                    <a href = "{{ route('kelola.barang.edit', $barang->id)}}" class="btn palette-Orange bg">Ubah Data Barang</a> |
                                    <button type="submit" class="btn palette-Red bg"> Hapus</button>
                                {!! Form::close()!!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop

