{{-- CEK USER SUDAH LOGIN --}}
@if(Auth::check())
    <div class="c-analytics row hidden-xs">
        {{-- JUMLAH ANGGOTA --}}
        <div class="col-sm-3">
            <div class="ca-item media">
                <div class="pull-right hidden-sm">
                    <div class="sparkline-bar-4 cai-chart"></div>
                </div>
                <div class="media-body">
                    {{-- MENGHITUNG JUMLAH USER --}}
                    @if((Auth::user()->status) =='belum-aktif')
                        <center><h2>-</h2></center>
                    @else
                        <h2>{{ App\User::count() }}</h2>
                        <small> Jumlah Anggota</small>
                    @endif
                </div>
            </div>
        </div>
        {{-- JUMLAH PINJAMAN --}}
        <div class="col-sm-3">
            <div class="ca-item media">
                <div class="pull-right hidden-sm">
                    <div class="sparkline-bar-5 cai-chart"></div>
                </div>
                <div class="media-body">
                    @if((Auth::user()->status) =='belum-aktif')
                        <center><h2>-</h2></center>
                    @else
                    <h2>Rp {{ number_format(App\Pinjaman::where('status','=','lunas')->sum('jumlah_pinjaman') ) }}</h2>
                    <small>Jumlah Pinjaman Lunas</small>
                    @endif
                </div>
            </div>
        </div>
        {{-- JUMLAH SIMPANAN --}}
        <div class="col-sm-3">
            <div class="ca-item media">
                <div class="pull-right hidden-sm">
                    <div class="sparkline-bar-6 cai-chart"></div>
                </div>
                <div class="media-body">
                    @if((Auth::user()->status) =='belum-aktif')
                        <center><h2>-</h2></center>
                    @else
                        <h2>Rp {{ number_format(App\Simpanan::where('status','=','aktif')->sum('nilai_penempatan')) }}</h2>
                        <small>Jumlah Simpanan</small>
                    @endif
                </div>
            </div>
        </div>
        {{-- JUMLAH PRODUK --}}
        <div class="col-sm-3">
            <div class="ca-item media">
                <div class="pull-right hidden-sm">
                    <div class="sparkline-bar-6 cai-chart"></div>
                </div>
                <div class="media-body">
                    <h2>{{ App\Produk::count() }}</h2>
                    <small>Jumlah Produk</small>

                </div>
            </div>
        </div>
    </div>
@endif