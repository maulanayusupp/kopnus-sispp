@extends('layouts.app')

@section('title')Tambah Produk
@stop

@section('content')
<div class="card">
    {!! Form::open(['url' => 'kelola/produk', 'role' => 'form','class'=>'form-horizontal'])!!}
    {{-- <form class="form-horizontal" role="form" method="POST" action="{{ url('kelola/akun') }}"> --}}
        {!! csrf_field() !!}
        <div class="card-header">
            <h2>Form Tambah Produk<small> form ini digunakan untuk menambah produk</small></h2>
        </div>
        <div class="card-body card-padding">
            @include('pages.kelola-produk._form')
        </div>
    {!! Form::close() !!}
</div>


@stop

