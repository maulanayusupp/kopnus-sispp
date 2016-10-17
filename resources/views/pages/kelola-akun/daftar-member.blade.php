@extends('layouts.app')

@section('title')Daftar Member
@stop

@section('content')


<div class="card">
    <div class="card-header">
        <h2>Daftar Member</h2>  
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
