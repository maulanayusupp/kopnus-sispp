@extends('layouts.app')

@section('title')Ubah Pinjaman
@stop

@section('content')
<div class="card">
    {!! Form::model($pinjam, ['route' => ['pinjaman.pinjaman.update', $pinjam],'method' =>'patch','role'=>'form','class'=>'form-horizontal'])!!}
    {{-- <form class="form-horizontal" role="form" method="POST" action="{{ url('kelola/akun') }}"> --}}
        {!! csrf_field() !!}
        <div class="card-body card-padding">
            @include('pages.pinjaman._form')
        </div>
    {!! Form::close() !!}
</div>

@stop

