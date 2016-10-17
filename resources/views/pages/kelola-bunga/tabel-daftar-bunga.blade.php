@extends('layouts.app')

@section('title')Kelola Bunga
@stop

@section('content')


<div class="card">
    <div class="card-header">
        <a class="btn btn-primary pull-right" href="{{ URL::to('kelola/bunga/') }}"> Kembali</a>
    </div>
    <div class="table-responsive">
        <table class="table" border="1">
            <thead>
                <tr>
                    <th width="500%">Nama Bunga</th>
                    @for($i = 1; $i <= 15; $i++)
                        <th>{{ $i }}</th>
                    @endfor
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>                
                <tr>
                    <td>Makro Sendiri dan MPP Jt < 70</td>
                    @foreach($makroSendiriMPPKurang as $bunga1)
                    <td>{{ $bunga1->bunga }}%</td>
                    @endforeach                    
                </tr>
                <tr>

                    <td>Makro Sendiri dan MPP Jt > 70</td>
                    @foreach($makroSendiriMPPLebih as $bunga2)
                    <td>{{ $bunga2->bunga }}%</td>
                    @endforeach                    
                </tr>
                <tr>

                    <td>Makro Baru Jd/Dd < 70</td>
                    @foreach($makroBaruJdDdKurang as $bunga3)
                    <td>{{ $bunga3->bunga }}%</td>
                    @endforeach                    
                </tr>
                <tr>

                    <td>Makro Baru Jd/Dd > 70</td>
                    @foreach($makroBaruJdDdLebih as $bunga4)
                    <td>{{ $bunga4->bunga }}%</td>
                    @endforeach                    
                </tr>
                <tr>

                    <td>Bunga Top Up Pens Sendiri</td>
                    @foreach($bungaTopUpPensSendiri as $bunga5)
                    <td>{{ $bunga5->bunga }}%</td>
                    @endforeach                    
                </tr>
                <tr>

                    <td>Bunga Top Up Janda / Duda</td>
                    @foreach($bungaTopUpJdDd as $bunga6)
                    <td>{{ $bunga6->bunga }}%</td>
                    @endforeach                    
                </tr>
                <tr>

                    <td>Bunga Mikro Pens Sendiri</td>
                    @foreach($bungaMikroPensSendiri as $bunga7)
                    <td>{{ $bunga7->bunga }}%</td>
                    @endforeach                    
                </tr>
                <tr>

                    <td>Makro Sendiri dan MPP Jt > 70</td>
                    @foreach($bungaMikroJdDd as $bunga8)
                    <td>{{ $bunga8->bunga }}%</td>
                    @endforeach                    
                </tr>

            </tbody>
        </table>
    </div>
</div>
@stop

@section('js')
@stop
