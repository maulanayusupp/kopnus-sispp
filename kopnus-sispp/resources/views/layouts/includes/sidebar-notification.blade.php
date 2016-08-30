@if(Auth::check())
    <aside id="s-user-alerts" class="sidebar">                
        <ul class="tab-nav tn-justified tn-icon m-t-10" data-tab-color="teal">
            <li><a class="sua-messages" href="#sua-messages" data-toggle="tab"><i class="zmdi zmdi-email"></i><br>Pinjaman</a></li>
            <li><a class="sua-notifications" href="#sua-notifications" data-toggle="tab"><i class="zmdi zmdi-notifications"></i><br>Simpanan</a></li>
            <li><a class="sua-tasks" href="#sua-tasks" data-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i><br>Tabungan</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade" id="sua-messages">
                <ul class="sua-menu list-inline list-unstyled palette-Light-Blue bg">
                    <li><a href="#" data-ma-action="sidebar-close"><i class="zmdi zmdi-close"></i> Close</a></li>
                </ul>
                <div class="list-group lg-alt c-overflow">
                    <div class="media-body">
                        {{-- MENGHITUNG JUMLAH PINJAMAN --}}
                        <center>
                            @if((Auth::user()->status) =='belum-aktif')
                                <h2>Akses Ditolak</h2><h4>Harap Aktivasi Terlebih dahulu</h4>
                            @else
                                <h2>{{ App\Pinjaman::count() }}</h2><h4>Jumlah Pinjaman</h4>
                            @endif
                        </center>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="sua-notifications">
                <ul class="sua-menu list-inline list-unstyled palette-Light-Blue bg">
                    <li><a href="#" data-ma-action="sidebar-close"><i class="zmdi zmdi-close"></i> Close</a></li>
                </ul>
                <div class="list-group lg-alt c-overflow">
                    <div class="media-body">
                        {{-- MENGHITUNG JUMLAH SIMPANAN --}}
                        <center>
                            @if((Auth::user()->status) =='belum-aktif')
                                <h2>Akses Ditolak</h2><h4>Harap Aktivasi Terlebih dahulu</h4>
                            @else
                                <h2>{{ App\Simpanan::count() }}</h2><h4>Jumlah Simpanan</h4>
                            @endif
                        </center>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="sua-tasks">
                <ul class="sua-menu list-inline list-unstyled palette-Light-Blue bg">
                    <li><a href="#" data-ma-action="sidebar-close"><i class="zmdi zmdi-close"></i> Close</a></li>
                </ul>
                <div class="list-group lg-alt c-overflow">
                    <div class="media-body">
                        {{-- MENGHITUNG JUMLAH SIMPANAN --}}
                        <center>
                            @if((Auth::user()->status) =='belum-aktif')
                                <h2>Akses Ditolak</h2><h4>Harap Aktivasi Terlebih dahulu</h4>
                            @else
                                <h2>{{ App\Tabungan::count() }}</h2><h4>Jumlah Tabungan</h4>
                            @endif
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </aside>
@endif