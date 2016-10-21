@extends('layouts.app')

@section('title')Kelola Akun
@stop

@section('content')

<div class="card">
    <form class="form-horizontal" role="form" method="GET" action="{{ url('kelola/akun') }}">
        <div class="card-body card-padding">
            <div class="form-group{{ $errors->has('q') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Cari Akun</label>
                <div class="col-sm-5">
                    <div class="fg-line">
                        <input type="text" class="form-control input-sm" name="q" placeholder="Cari User berdasarkan ID">
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
                    <button type="submit" class="btn btn-primary">Cari ID User</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="card">
    <div class="card-header">
        <h2>Daftar Akun <a class="btn btn-primary pull-right" href="{{ URL::to('kelola/akun/create') }}"> Tambah Akun</a>
            <small>berikut daftar akun yang terdaftar pada sistem.</small></h2>  
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>User ID</th>
                    <th>Nama</th>
                    <th>E-Mail</th>
                    <th>Hak Akses</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{--*/ $no=1 /*--}}
                @foreach($users as $user)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><span class="label label-{{$user->role=='admin' ? 'danger' : 'primary' }}">{{ $user->role }}</span></td>
                        <td><span class="label label-{{$user->status=='aktif' ? 'success' : 'warning' }}">{{ $user->status }}</span></td>
                        <td>
                            {!! Form::model($user, ['route' => ['kelola.akun.destroy', $user], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                                <a href = "{{ route('kelola.akun.edit', $user->id)}}" class="btn palette-Orange bg">Ubah</a> |
                                @if($user->role == 'member')
                                    <a href = "{{ route('kelola.akun.show', $user->id)}}" class="btn palette-Blue bg">Data Anggota</a> |
                                @endif
                                <button type="submit" class="btn palette-Red bg"> Hapus</button>
                            {!! Form::close()!!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->appends(compact('q'))->links() }}
    </div>
</div>
@stop

@section('js')
@stop
