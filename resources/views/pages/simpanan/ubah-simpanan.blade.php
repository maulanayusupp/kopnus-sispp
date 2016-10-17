@extends('layouts.app')

@section('title')Ubah Simpanan
@stop

@section('content')
<div class="card">
    {!! Form::model($simpanan, ['route' => ['simpanan.simpanan.update', $simpanan],'method' =>'patch','role'=>'form','class'=>'form-horizontal'])!!}
    {{-- <form class="form-horizontal" role="form" method="POST" action="{{ url('kelola/akun') }}"> --}}
        {!! csrf_field() !!}
        <div class="card-body card-padding">
            @include('pages.simpanan._form')
        </div>
    {!! Form::close() !!}
</div>

@stop
