@extends('layouts.app')

@section('title')Tabungan Baru
@stop

@section('content')
<div class="card">
    {!! Form::open(['url' => 'kelola/tabungan', 'role' => 'form','class'=>'form-horizontal'])!!}
    {{-- <form class="form-horizontal" role="form" method="POST" action="{{ url('kelola/akun') }}"> --}}
        {!! csrf_field() !!}
        <div class="card-header">
            <h2>Form Buat Tabungan Baru</h2>
        </div>
        <div class="card-body card-padding">
            @include('pages.kelola-tabungan._form')
        </div>
    {!! Form::close() !!}
</div>
@stop

