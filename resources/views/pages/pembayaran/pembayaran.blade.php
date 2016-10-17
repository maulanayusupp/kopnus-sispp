@extends('layouts.app')

@section('title')Pembayaran
@stop

@section('content')
<div class="card">
    {!! Form::open(['url' => 'pembayaran/pembayaran', 'role' => 'form','class'=>'form-horizontal'])!!}
    {{-- <form class="form-horizontal" role="form" method="POST" action="{{ url('kelola/akun') }}"> --}}
        {!! csrf_field() !!}
        <div class="card-header">
            <center><h2>FORM PEMBAYARAN</h2></center>
        </div>
        <hr>
        <div class="card-body card-padding">
            @include('pages.pembayaran._form')
        </div>
    {!! Form::close() !!}
</div>
@stop
