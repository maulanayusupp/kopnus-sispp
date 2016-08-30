@if(Auth::check())
    <aside id="s-user-alerts" class="sidebar">                
        <ul class="tab-nav tn-justified tn-icon m-t-10" data-tab-color="teal">
            <li><a class="sua-messages" href="#sua-messages" data-toggle="tab"><i class="zmdi zmdi-collection-text"></i><br>Pinjaman</a></li>
            <li><a class="sua-notifications" href="#sua-notifications" data-toggle="tab"><i class="zmdi zmdi-swap-alt"></i><br>Simpanan</a></li>
            <li><a class="sua-tasks" href="#sua-tasks" data-toggle="tab"><i class="zmdi zmdi-case"></i><br>Tabungan</a></li>
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
                            @can('member-access')
                                <h2>Hanya Admin</h2><h4>Yang dapat menggunakan fitur ini</h4>
                            @endcan
                            @can('admin-access')
                                <h2>{{ App\Pinjaman::count() }}</h2><h4>Jumlah Pinjaman</h4>
                            @endcan
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
                            @can('member-access')
                                <h2>Hanya Admin</h2><h4>Yang dapat menggunakan fitur ini</h4>
                            @endcan
                            @can('admin-access')
                                <h2>{{ App\Simpanan::count() }}</h2><h4>Jumlah Simpanan</h4>
                            @endcan
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
                            @can('member-access')
                                <h2>Hanya Admin</h2><h4>Yang dapat menggunakan fitur ini</h4>
                            @endcan
                            @can('admin-access')
                                <h2>{{ App\Tabungan::count() }}</h2><h4>Jumlah Tabungan</h4>
                            @endcan
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </aside>
@endif