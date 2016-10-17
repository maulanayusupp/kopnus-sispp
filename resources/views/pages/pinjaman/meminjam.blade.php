@extends('layouts.app')

@section('title')Meminjam
@stop

@section('content')
{{-- OPEN FORM --}}
{!! Form::open(['url' => 'pinjaman/pinjaman', 'role' => 'form','class'=>'form-horizontal']) !!}
	@include('pages.pinjaman._form')
{{-- CLOSE FORM --}}
{!! Form::close() !!}
@stop
