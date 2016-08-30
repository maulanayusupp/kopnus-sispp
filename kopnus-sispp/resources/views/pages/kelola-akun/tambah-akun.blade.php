@extends('layouts.app')

@section('title')Tambah Akun
@stop

@section('content')
<div class="card">
    {!! Form::open(['url' => 'kelola/akun', 'role' => 'form','class'=>'form-horizontal'])!!}
    {{-- <form class="form-horizontal" role="form" method="POST" action="{{ url('kelola/akun') }}"> --}}
        {!! csrf_field() !!}
        <div class="card-header">
            <h2>Form Tambah Akun<small> form ini digunakan untuk menambah akun (admin atau anggota)</small></h2>
        </div>
        <div class="card-body card-padding">
            @include('pages.kelola-akun._form')
        </div>
    {!! Form::close() !!}
</div>


@stop

