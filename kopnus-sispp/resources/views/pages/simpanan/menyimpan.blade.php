@extends('layouts.app')

@section('title')Menyimpan
@stop

@section('content')
{{-- OPEN FORM --}}
{!! Form::open(['url' => 'simpanan/simpanan', 'role' => 'form','class'=>'form-horizontal']) !!}
	@include('pages.simpanan._form')
{{-- CLOSE FORM --}}
{!! Form::close() !!}
@stop
