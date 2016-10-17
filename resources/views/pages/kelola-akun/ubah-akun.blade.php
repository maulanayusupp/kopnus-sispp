@extends('layouts.app')

@section('title')Ubah Akun
@stop

@section('content')
<div class="card">
    {!! Form::model($user, ['route' => ['kelola.akun.update', $user],'method' =>'patch','role'=>'form','class'=>'form-horizontal'])!!}
        {!! csrf_field() !!}
        <div class="card-body card-padding">
            @include('pages.kelola-akun._form')
        </div>
    {!! Form::close() !!}
</div>


@stop

