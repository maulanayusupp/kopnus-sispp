@extends('layouts.app')

@section('title')Ubah Data Pekerjaan
@stop

@section('content')
<div class="card">
{!! Form::model($dataPekerjaan, ['route' => ['kelola.akun.ubahDataPekerjaan', $dataPekerjaan],'method' =>'put','role'=>'form','class'=>'form-horizontal','files'=>'true']) !!}
    {!! csrf_field() !!}
    <div class="card-body card-padding">
    	@include('pages.kelola-akun._form-ubah-data-pekerjaan')
    </div>
{!! Form::close() !!}
</div>
@stop

