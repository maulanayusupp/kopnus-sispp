@extends('layouts.app')

@section('title')Ubah Data Anggota
@stop

@section('content')
<div class="card">
{!! Form::model($dataAnggota, ['route' => ['kelola.akun.ubahDataAnggota', $dataAnggota],'method' =>'put','role'=>'form','class'=>'form-horizontal','files'=>'true']) !!}
    {!! csrf_field() !!}
    <div class="card-body card-padding">
    	@include('pages.kelola-akun._form-ubah-data-anggota')
    </div>
{!! Form::close() !!}
</div>
@stop

