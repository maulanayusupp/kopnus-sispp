@extends('layouts.app')

@section('title')Ubah Akun
@stop

@section('content')
<div class="card">
    {!! Form::model($barang, ['route' => ['kelola.barang.update', $barang],'method' =>'patch','role'=>'form','class'=>'form-horizontal'])!!}
        {!! csrf_field() !!}
        <div class="card-body card-padding">
            @include('pages.kelola-barang._form')
        </div>
    {!! Form::close() !!}
</div>
@stop

