<aside id="s-main-menu" class="sidebar">
    <ul class="smm-alerts">
        <li data-user-alert="sua-messages" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <i class="zmdi zmdi-collection-text"></i>
        </li>
        <li data-user-alert="sua-notifications" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <i class="zmdi zmdi-swap-alt"></i>
        </li>
        <li data-user-alert="sua-tasks" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <i class="zmdi zmdi-case"></i>
        </li>
    </ul>
    {{-- CEK USER SUDAH LOGIN --}}
    @if(Auth::check())
    <ul class="main-menu">
        {{-- home --}}
        <li class= {{ Request::is('home') ? 'active' : '' }}><a href="{{ URL::to('home') }}"><i class="zmdi zmdi-home"></i> Home</a></li>
        {{-- SIDEBAR MENU MEMBER --}}
        @can('member-access')
            {{-- pinjaman --}}
            @if((Auth::user()->status) =='belum-aktif')
                <li class= {{ Request::is('aktivasi') ? 'active' : '' }}><a href="{{ route('aktivasi.edit', encrypt(Auth::user()->id) )}}"><i class="zmdi zmdi-seat"></i> Aktivasi</a></li>
            @else
                <li class="sub-menu class= {{ Request::is('pinjaman/*') ? 'active' : '' }}">
                    <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-compact"></i> Pinjaman</a>
                    <ul>
                        <li class= {{ Request::is('pinjaman/meminjam') ? 'active' : '' }}><a href="{{ URL::to('pinjaman/meminjam') }}">Ajukan Pinjaman</a></li>
                        <li class= {{ Request::is('pinjaman/riwayat') ? 'active' : '' }}><a href="{{ URL::to('pinjaman/riwayat') }}">Riwayat Pinjaman</a></li>
                    </ul>
                </li>
                {{-- simpanan --}}
                <li class="sub-menu class= {{ Request::is('simpanan/*') ? 'active' : '' }}">
                    <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-list"></i> Simpanan</a>
                    <ul>
                        <li class= {{ Request::is('simpanan/riwayat') ? 'active' : '' }}><a href="{{ URL::to('simpanan/riwayat') }}">Riwayat Simpanan</a></li>
                    </ul>
                </li>
                {{-- pembayaran --}}
                <li class="sub-menu class= {{ Request::is('pembayaran/*') ? 'active' : '' }}">
                    <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-widgets"></i> Pembayaran</a>
                    <ul>
                        
                        <li class= {{ Request::is('pembayaran/riwayat') ? 'active' : '' }}><a href="{{ URL::to('pembayaran/riwayat') }}">Riwayat Pembayaran</a></li>
                    </ul>
                </li>
            @endif
        @endcan
        {{-- SIDEBAR MENU ADMIN --}}
        @can('admin-access')
            {{-- kelola pinjaman --}}
            <li class="sub-menu class= {{ Request::is('kelola/pinjaman') || Request::is('kelola/pinjaman/verifikasi') ? 'active' : '' }}">
                <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-collection-text"></i> Kelola Pinjaman 
                    {{-- NOTIFIKASI --}}
                    @if( (App\Pinjaman::where('status','menunggu')->count())>0 )
                        <span class="label label-danger">{{ App\Pinjaman::where('status','menunggu')->count() }}</span>
                    @endif
                </a>
                <ul>
                    {{-- DROPDOWN --}}
                    <li class= {{ Request::is('kelola/pinjaman') ? 'active' : '' }} >
                        <a href="{{ URL::to('kelola/pinjaman') }}" ><i class="zmdi zmdi-collection-text"></i> Kelola Pinjaman 
                        </a>
                    </li>
                    {{-- DROPDOWN --}}
                    <li class= {{ Request::is('kelola/pinjaman/verifikasi') ? 'active' : '' }} >
                        <a href="{{ URL::to('kelola/pinjaman/verifikasi') }}" ><i class="zmdi zmdi-assignment"></i> Verifikasi Pinjaman 
                            {{-- NOTIFIKASI --}}
                            @if( (App\Pinjaman::where('status','menunggu')->count())>0 )
                                <span class="label label-danger">{{ App\Pinjaman::where('status','menunggu')->count() }}</span>
                            @endif
                        </a>
                    </li>
                </ul>
            </li>
            {{-- kelola simpanan --}}
            <li class="sub-menu class= {{ Request::is('kelola/simpanan') || Request::is('kelola/simpanan/verifikasi') ? 'active' : '' }}">
                <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-swap-alt"></i> Kelola Simpanan 
                    {{-- NOTIFIKASI --}}
                    @if((App\Simpanan::where('status','menunggu')->count())>0)
                        <span class="label label-danger">{{ App\Simpanan::where('status','menunggu')->count() }}</span>
                    @endif
                </a>
                <ul>
                    {{-- DROPDOWN --}}
                    <li class= {{ Request::is('simpanan/menyimpan') ? 'active' : '' }}>
                        <a href="{{ URL::to('simpanan/menyimpan') }}">Simpanan</a>
                    </li>
                    <li class= {{ Request::is('kelola/simpanan') ? 'active' : '' }} >
                        <a href="{{ URL::to('kelola/simpanan') }}" ><i class="zmdi zmdi-swap-alt"></i> Kelola Simpanan 
                        </a>
                    </li>
                    <li class= {{ Request::is('kelola/simpanan/verifikasi') ? 'active' : '' }} >
                        <a href="{{ URL::to('kelola/simpanan/verifikasi') }}" ><i class="zmdi zmdi-assignment-returned"></i> Verifikasi Simpanan 
                            {{-- NOTIFIKASI --}}
                            @if((App\Simpanan::where('status','menunggu')->count())>0)
                                <span class="label label-danger">{{ App\Simpanan::where('status','menunggu')->count() }}</span>
                            @endif
                        </a>
                    </li>
                </ul>
            </li>
            {{-- kelola pembayaran --}}
            <li class="sub-menu class= {{ Request::is('kelola/pembayaran') || Request::is('kelola/pembayaran/verifikasi') ? 'active' : '' }}">
                <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-local-atm"></i> Kelola Pembayaran 
                    {{-- NOTIFIKASI --}}
                    @if((App\Pembayaran::where('status','menunggu')->count())>0)
                        <span class="label label-danger">{{ App\Pembayaran::where('status','menunggu')->count() }}</span>
                    @endif
                </a>
                <ul>
                    {{-- DROPDOWN --}}                    
                    <li class= {{ Request::is('pembayaran/pembayaran') ? 'active' : '' }}>
                        <a href="{{ URL::to('pembayaran/pembayaran') }}">Pembayaran</a>
                    </li>
                    <li class= {{ Request::is('kelola/pembayaran') ? 'active' : '' }} >
                        <a href="{{ URL::to('kelola/pembayaran') }}" ><i class="zmdi zmdi-local-atm"></i> Kelola Pembayaran</a>
                    </li>
                    <li class= {{ Request::is('kelola/pembayaran/verifikasi') ? 'active' : '' }} >
                        <a href="{{ URL::to('kelola/pembayaran/verifikasi') }}" ><i class="zmdi zmdi-local-offer"></i> Verifikasi Pembayaran 
                            {{-- NOTIFIKASI --}}
                            @if((App\Pembayaran::where('status','menunggu')->count())>0)
                                <span class="label label-danger">{{ App\Pembayaran::where('status','menunggu')->count() }}</span>
                            @endif
                        </a>
                    </li>
                </ul>
            </li>
            {{-- kelola bunga --}}
            <li class= {{ Request::is('kelola/bunga') ? 'active' : '' }}><a href="{{ URL::to('kelola/bunga') }}" ><i class="zmdi zmdi-money"></i> Kelola Bunga</a></li>
            {{-- kelola tabungan --}}
            <li class= {{ Request::is('kelola/tabungan') ? 'active' : '' }}><a href="{{ URL::to('kelola/tabungan') }}" ><i class="zmdi zmdi-case"></i> Kelola Tabungan</a></li>
            {{-- kelola produk --}}
            <li class= {{ Request::is('kelola/produk') ? 'active' : '' }}><a href="{{ URL::to('kelola/produk') }}" ><i class="zmdi zmdi-pizza"></i> Kelola Produk</a></li>
            {{-- kelola akun --}}
            <li class="sub-menu class= {{ Request::is('kelola/akun') || Request::is('kelola/akun/daftar-member') ? 'active' : '' }}">
                <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-account"></i> Kelola Akun  
                </a>
                <ul>
                    {{-- DROPDOWN --}}
                    <li class= {{ Request::is('kelola/akun') ? 'active' : '' }} >
                        <a href="{{ URL::to('kelola/akun') }}" ><i class="zmdi zmdi-account"></i> Kelola Akun 
                        </a>
                    </li>
                    <li class= {{ Request::is('kelola/akun/daftar-member') ? 'active' : '' }} >
                        <a href="{{ URL::to('kelola/akun/daftar-member') }}" ><i class="zmdi zmdi-accounts"></i> Daftar Member 
                        </a>
                    </li>
                </ul>
            </li>
        @endcan
    </ul>
    @endif
</aside>

