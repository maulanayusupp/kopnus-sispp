@extends('layouts.app')

@section('title')Tambah Bunga
@stop

@section('content')
<div class="card">
    {!! Form::open(['url' => 'kelola/bunga', 'role' => 'form','class'=>'form-horizontal'])!!}
    {{-- <form class="form-horizontal" role="form" method="POST" action="{{ url('kelola/akun') }}"> --}}
        {!! csrf_field() !!}
        <div class="card-header">
            <h2>Form Tambah Bunga<small> form ini digunakan untuk menambah bunga/kategori bunga</small></h2>
        </div>
        <div class="card-body card-padding">
            @include('pages.kelola-bunga._form')
        </div>
    {!! Form::close() !!}
</div>


@stop

