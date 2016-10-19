@extends('layouts.app')

@section('title')Pembayaran
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <center><h2>FORM PEMBAYARAN</h2></center>
    </div>
    <hr>
    {!! Form::open( ['url' =>'pembayaran/pembayaran','method' =>'get','role'=>'form','class'=>'form-horizontal form-label-left'])!!}
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group{{ $errors->has('pinjaman_id') ? ' has-error' : '' }}">
                <label class="col-sm-3 control-label"><strong>Nomor Pinjaman</strong></label>
                <div class="col-sm-3">
                    <div class="fg-line">
                        {!! Form::select('pinjaman_id', [''=>'']+App\Pinjaman::where('status','terima')->lists('id','id')->all(), null, ['class'=>'chosen', 'onchange'=>'this.form.submit()']) !!}
                    </div>
                    @if($errors->has('pinjaman_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('pinjaman_id') }}</strong>
                        </span>
                    @endif
                </div>
            </div>                    
        </div>
    </div>
    {!! Form::close() !!}

    {!! Form::open(['url' => 'pembayaran/pembayaran', 'role' => 'form','class'=>'form-horizontal'])!!}
    {{-- <form class="form-horizontal" role="form" method="POST" action="{{ url('kelola/akun') }}"> --}}
        {!! csrf_field() !!}

        <div class="card-body card-padding">
            @include('pages.pembayaran._form')
        </div>
    {!! Form::close() !!}
</div>
@stop
