@extends('layouts.app')

@section('title')Ubah Tabungan
@stop

@section('content')
<div class="card">
    <div class="card-body card-padding">
        {!! Form::model($tabungan, ['route' => ['kelola.tabungan.update', $tabungan],'method' =>'patch','role'=>'form','class'=>'form-horizontal'])!!}
            <center><b><h3> Tabungan - {{ $tabungan->nama }}</h3></b></center>
            <hr>
            {!! csrf_field() !!}
            <div class="card-body card-padding">
                @include('pages.kelola-tabungan._form')
            </div>
        {!! Form::close() !!}
    </div>
</div>


@stop

