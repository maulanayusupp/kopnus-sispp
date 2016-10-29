@extends('layouts.app')

@section('title')Kelola Obat
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <h2>Daftar Obat <a class="btn btn-primary pull-right" href="{{ URL::to('kelola/obat/create') }}"> Tambah Obat</a>
                <small>berikut daftar obat yang terdaftar pada sistem.</small></h2>  
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
                    @foreach($obats as $obat)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $obat->nama }}</td>
                            <td>{{ $obat->harga }}</td>
                            <td>
                                {!! Form::model($Obat, ['route' => ['kelola.obat.destroy', $obat], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                                    <a href = "{{ route('kelola.obat.edit', $obat->id)}}" class="btn palette-Orange bg">Ubah Data Obat</a> |
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

