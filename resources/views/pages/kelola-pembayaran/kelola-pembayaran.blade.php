@extends('layouts.app')

@section('title')Kelola Pembayaran
@stop

@section('content')


@if((App\Pembayaran::count() == 0 ))
<div class="card">
    <div class="card-header">
       <center><h2>Belum ada pembayaran yang dilakukan</h2></center>
    </div>
</div>
@else
{{-- PENCARIAN BERDASARKAN ID ANGGOTA/MEMBER --}}
<div class="card">
    <form class="form-horizontal" role="form" method="GET" action="{{ url('kelola/pembayaran') }}">
        <div class="card-body card-padding">
            <div class="form-group{{ $errors->has('q') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Cari Riwayat</label>
                <div class="col-sm-5">
                    <div class="fg-line">
                        <input type="text" class="form-control input-sm" name="q" placeholder="Cari riwayat berdasarkan ID Anggota">
                        @if ($errors->has('q'))
                            <span class="help-block">
                                <strong>{{ $errors->first('q') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Cari Riwayat Pembayaran</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="card">
    <div class="card-header">
        <h2>Daftar Riwayat Pembayaran <small>berikut daftar riwayat pembayaran yang telah anda lakukan.</small></h2>  
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th width="10%">ID Pembayaran</th>
                    <th>Nama</th>
                    <th>Pinjaman</th>
                    <th>Jumlah Pembayaran</th>
                    <th>Sisa Pembayaran</th>
                    <th>Angsuran Ke </th>
                    <th>Status</th>
                    <th><center>Aksi</center></th>
                </tr>
            </thead>
            <tbody>
                @foreach($pembayarans as $pembayaran)
                    <tr>
                        <td>{{ $pembayaran->id }}</td>
                        <td>{{ $pembayaran->nama }}</td>
                        <td>{{ $pembayaran->pinjaman_id }}</td>
                        <td>Rp {{ number_format($pembayaran->jumlah_pembayaran) }}</td>
                        <td>Rp {{ number_format($pembayaran->sisa_pinjaman) }}</td>
                        <td>{{ $pembayaran->angsuran_nomor }}</td>
                        <td><span class="label label-{{$pembayaran->status=='dibayar' ? 'success' : 'danger' }}">{{ $pembayaran->status }}</span></td>
                        <td>
                            @if($pembayaran->status=='menunggu')
                                {!! Form::model($pembayaran, ['route' => ['kelola.pembayaran.destroy', $pembayaran], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                                <a href = "{{ route('kelola.pembayaran.showverifikasi', $pembayaran->id)}}" class="btn palette-Indigo bg">Verifikasi</a> | 
                                <a href = "{{ route('kelola.pembayaran.show', $pembayaran->id)}}" class="btn palette-Blue bg">Lihat</a> | 
                                <button type="submit" class="btn palette-Red bg"> Batalkan</button>
                                {!! Form::close()!!}
                            @else
                                <a href = "{{ route('kelola.pembayaran.show', $pembayaran->id)}}" class="btn palette-Blue bg">Lihat Data Pembayaran</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@stop
