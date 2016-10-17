{!! Form::model($user, ['route' => ['aktivasi.update', $user],'method' =>'patch','role'=>'form','class'=>'form-horizontal'])!!}
    {{-- <form class="form-horizontal" role="form" method="POST" action="{{ url('kelola/akun') }}"> --}}
    {!! csrf_field() !!}
	<!-- Tabs -->
    <div class="card">
        <div class="card-body">
            <ul class="tab-nav tn-justified tn-icon" role="tablist">
                <li role="presentation" class="active">
                    <a class="col-sx-3" href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">
                        <i class="zmdi zmdi-collection-text icon-tab"></i> <h5>Data Anggota</h5>
                    </a>
                </li>
                <li role="presentation">
                    <a class="col-xs-3" href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">
                        <i class="zmdi zmdi-collection-text icon-tab"></i> <h5>Data Pekerjaan</h5>
                    </a>
                </li>
                <li role="presentation">
                    <a class="col-xs-3" href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab">
                        <i class="zmdi zmdi-collection-text icon-tab"></i> <h5>Catatan Anggota</h5>
                    </a>
                </li>
                <li role="presentation">
                    <a class="col-xs-3" href="#tab-4" aria-controls="tab-4" role="tab" data-toggle="tab">
                        <i class="zmdi zmdi-dns icon-tab"></i> <h5>Rekening Tabungan</h5>
                    </a>
                </li>
                <li role="presentation">
                    <a class="col-xs-3" href="#tab-5" aria-controls="tab-5" role="tab" data-toggle="tab">
                        <i class="zmdi zmdi-star icon-tab"></i> <h5>Konfirmasi Pendaftaran</h5>
                    </a>
                </li>
            </ul>

            <div class="tab-content p-20">
                <div role="tabpanel" class="tab-pane animated fadeIn in active" id="tab-1">
                	{{-- FORM DATA ANGGOTA --}}
                	@include('pages.aktivasi.elements.data-anggota')
                </div>
                <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-2">
                	{{-- FORM DATA PEKERJAAN --}}
    				@include('pages.aktivasi.elements.data-pekerjaan')            	
                </div>
                <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-3">
                	{{-- FORM CATATAN --}}
                	@include('pages.aktivasi.elements.catatan')
                </div>
                <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-4">
                    {{-- REKENING TABUNGAN --}}
                    @include('pages.aktivasi.elements.rekening-tabungan')
                </div>
                <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-5">
                	{{-- FORM KONFIRMASI PENDAFTARAN --}}
                    @include('pages.aktivasi.elements.konfirmasi-pendaftaran')
                </div>
            </div>
        </div>
    </div>
    {{-- TUTUP FORM --}}
{!! Form::close() !!}