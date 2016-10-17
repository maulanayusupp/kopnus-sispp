@extends('layouts.app')

@section('title')Ubah Produk
@stop

@section('content')
<div class="card">
    {!! Form::model($produk, ['route' => ['kelola.produk.update', $produk],'method' =>'patch','role'=>'form','class'=>'form-horizontal'])!!}
        {!! csrf_field() !!}
        <div class="card-header">
            <h2>Form ubah produk<small> form ini digunakan untuk merubah data produk</small></h2>
        </div>
        <div class="card-body card-padding">
            @include('pages.kelola-produk._form')
        </div>
    {!! Form::close() !!}
</div>


@stop

