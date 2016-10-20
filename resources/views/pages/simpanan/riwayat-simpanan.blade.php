@extends('layouts.app')

@section('title')Riwayat Simpanan
@stop

@section('content')<div class="card">
    <div class="card-header">
        <h2>Daftar Riwayat Simpanan <small>berikut daftar riwayat simpanan yang telah anda lakukan.</small></h2>  
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID Simpanan</th>
                    <th>ID Tabungan</th>
                    <th>Jumlah Simpanan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tabungan->simpanan as $simpan)
                    <tr>
                        <td>{{ $simpan->id }}</td>
                        <td>{{ $simpan->tabungan_id }}</td>
                        <td>Rp. {{ number_format($simpan->nilai_penempatan) }}</td>
                        <td><span class="label label-{{ $simpan->status=='disimpan' ? 'success' : 'danger' }}">{{ $simpan->status }}</span></td>
                        <td>
{{--                             @if($simpan->status=='menunggu')
                                {!! Form::model($simpan, ['route' => ['simpanan.simpanan.destroy', $simpan], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                                <a href = "{{ route('simpanan.simpanan.edit', $simpan->id)}}" class="btn palette-Orange bg">Ubah Simpanan</a> |
                                <button type="submit" class="btn palette-Red bg"> Batal Simpanan</button>
                                {!! Form::close()!!}
                            @else --}}
                                <a href = "{{ route('simpanan.simpanan.show', $simpan->id)}}" class="btn palette-Blue bg">Lihat Data Simpanan</a>
{{--                             @endif --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

