@extends('layouts.app')

@section('title')Ubah Bunga
@stop

@section('content')
<div class="card">
    {!! Form::model($bunga, ['route' => ['kelola.bunga.update', $bunga],'method' =>'patch','role'=>'form','class'=>'form-horizontal'])!!}
        {!! csrf_field() !!}
        <div class="card-header">
            <h2>Form ubah bunga<small> form ini digunakan untuk mengubah data bunga</small></h2>
        </div>
        <div class="card-body card-padding">
            @include('pages.kelola-bunga._form')
        </div>
    {!! Form::close() !!}
</div>


@stop

