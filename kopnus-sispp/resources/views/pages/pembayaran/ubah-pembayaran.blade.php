@extends('layouts.app')

@section('title')Ubah Pembayaran
@stop

@section('content')
<div class="card">
    {!! Form::model($pembayaran, ['route' => ['pembayaran.pembayaran.update', $pembayaran],'method' =>'patch','role'=>'form','class'=>'form-horizontal'])!!}
        {!! csrf_field() !!}
        <div class="card-body card-padding">
            @include('pages.pembayaran._form')
        </div>
    {!! Form::close() !!}
</div>

@stop