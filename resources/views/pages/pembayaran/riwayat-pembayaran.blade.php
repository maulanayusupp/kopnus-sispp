@extends('layouts.app')

@section('title')Riwayat Pembayaran
@stop

@section('content')
@if( (App\Pembayaran::where('user_id', '=', Auth::user()->id)->count()) == 0 )
<div class="card">
    <div class="card-header">
       <center><h2>Belum ada pembayaran yang dilakukan</h2></center>
    </div>
</div>
@else
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
                    <th>Sisa Pinjaman</th>
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
                        <td><span class="label label-{{$pembayaran->status=='dibayar' ? 'success' : 'danger' }}">{{ $pembayaran->status }}</span></td>
                        <td>
{{--                             @if($pembayaran->status=='menunggu')
                                {!! Form::model($pembayaran, ['route' => ['pembayaran.pembayaran.destroy', $pembayaran], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                                <a href = "{{ route('pembayaran.pembayaran.edit', $pembayaran->id)}}" class="btn palette-Orange bg">Ubah</a> | 
                                <a href = "{{ route('pembayaran.pembayaran.show', $pembayaran->id)}}" class="btn palette-Blue bg">Lihat</a> | 
                                <button type="submit" class="btn palette-Red bg"> Batalkan</button>
                                {!! Form::close()!!}
                            @else --}}
                                <a href = "{{ route('pembayaran.pembayaran.show', $pembayaran->id)}}" class="btn palette-Blue bg">Lihat Data Pembayaran</a>
{{--                             @endif --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $pembayarans->appends(compact('q'))->links() }}
    </div>
</div>
@endif

@stop
