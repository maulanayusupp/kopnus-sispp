
<div class="card">
    <div class="card-body">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#tab1" data-toggle="tab">
                    <i class="zmdi zmdi-collection-text icon-tab"></i> <h5>Data Anggota</h5>
                </a>
            </li>
            <li>
                <a href="#tab2" data-toggle="tab">
                    <i class="zmdi zmdi-collection-text icon-tab"></i> <h5>Data Pekerjaan</h5>
                </a>
            </li>
            <li>
                <a href="#tab3" data-toggle="tab">
                    <i class="zmdi zmdi-collection-text icon-tab"></i> <h5>Catatan Anggota</h5>
                </a>
            </li>
            <li>
                <a href="#tab4" data-toggle="tab">
                    <i class="zmdi zmdi-dns icon-tab"></i> <h5>Rekening Tabungan</h5>
                </a>
            </li>
            <li>
                <a href="#tab5" data-toggle="tab">
                    <i class="zmdi zmdi-star icon-tab"></i> <h5>Konfirmasi Pendaftaran</h5>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                @include('pages.aktivasi.elements.data-anggota')
                <hr>
                <center>
                    <a class="btn btn-primary btnNext" >Next</a>
                </center>
                
            </div>
            <div class="tab-pane" id="tab2">
                @include('pages.aktivasi.elements.data-pekerjaan')
                <hr>
                <center>
                    <a class="btn btn-primary btnPrevious" >Previous</a> | 
                    <a class="btn btn-primary btnNext" >Next</a>

                </center>
                
            </div>
            <div class="tab-pane" id="tab3">
                @include('pages.aktivasi.elements.catatan')
                <hr>
                <center>
                    <a class="btn btn-primary btnPrevious" >Previous</a> | 
                    <a class="btn btn-primary btnNext" >Next</a>
                </center>
                
            </div>
            <div class="tab-pane" id="tab4">
                @include('pages.aktivasi.elements.rekening-tabungan')
                <hr>
                <center>

                    <a class="btn btn-primary btnPrevious" >Previous</a> | 
                    <a class="btn btn-primary btnNext" >Next</a>
                </center>
                
            </div>
            <div class="tab-pane" id="tab5">
                @include('pages.aktivasi.elements.konfirmasi-pendaftaran')
                <hr>
                <center>
                    <a class="btn btn-primary btnPrevious" >Previous</a>
                </center>                
            </div>
        </div>
    </div>
</div>

