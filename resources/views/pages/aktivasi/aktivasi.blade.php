@extends('layouts.app')

@section('title')Aktivasi - {{ $user->name }}
@stop

@section('content')
{{-- HINT --}}
@if((Auth::user()->status) =='belum-aktif')
    <div class="container">
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Harap melakukan aktivasi terlebih dahulu untuk dapat melakukan proses pada sistem dengan mengisi semua form pada menu aktivasi.
            <ol>
                <li>Mengisi Data Anggota</li>
                <li>Mengisi Data Pekerjaan</li>
                <li>Mengisi Data Catatan Anggota</li>
                <li>Mengisi Data Pengaturan Tabungan</li>
            </ol>
            Pastikan data yang dimasukkan secara valid dan cek kembali data yang telah diisi dengan seksama.
        </div>
    </div>
@endif

{{-- DATA MEMBER --}}
<section id="content">
    <div class="container">
        <div class="alert alert-info">
            {{-- TABLE BACKGROUND TRANSPARENT --}}
            <table style="background-color:rgba(0, 0, 0, 0);">
                <thead>
                    <tr>
                        <td width="30%">Nama</td>
                        <td width="5%">:</td>
                        <td> {{ ' '.$user->name }}</td>
                    </tr>
                    <tr>
                        <td>ID Anggota</td>
                        <td>:</td>
                        <td> {{ ' '.$user->id }}</td>
                    </tr>
                    <tr>
                        <td>E-Mail</td>
                        <td>:</td>
                        <td> {{ ' '.$user->email }}</td>
                    </tr>
                    <tr>
                        <td>Status Member</td>
                        <td>:</td>
                        <td> <strong>{{ ' '.$user->status . ' (aktivasi diperlukan)'}}</strong></td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</section>

{!! Form::model($user, ['route' => ['aktivasi.update', $user],'method' =>'patch','role'=>'form','class'=>'form-horizontal','files'=>'true']) !!}
    {!! csrf_field() !!}
    @include('pages.aktivasi.elements._form')
{!! Form::close() !!}

@stop

