<aside id="s-main-menu" class="sidebar">
    <ul class="smm-alerts">
        <li data-user-alert="sua-messages" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <i class="zmdi zmdi-email"></i>
        </li>
        <li data-user-alert="sua-notifications" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <i class="zmdi zmdi-notifications"></i>
        </li>
        <li data-user-alert="sua-tasks" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <i class="zmdi zmdi-view-list-alt"></i>
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
                        <li class= {{ Request::is('pinjaman/meminjam') ? 'active' : '' }}><a href="{{ URL::to('pinjaman/meminjam') }}">Meminjam</a></li>
                        <li class= {{ Request::is('pinjaman/riwayat') ? 'active' : '' }}><a href="{{ URL::to('pinjaman/riwayat') }}">Riwayat Pinjaman</a></li>
                    </ul>
                </li>
                {{-- simpanan --}}
                <li class="sub-menu class= {{ Request::is('simpanan/*') ? 'active' : '' }}">
                    <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-list"></i> Simpanan</a>
                    <ul>
                        <li class= {{ Request::is('simpanan/menyimpan') ? 'active' : '' }}><a href="{{ URL::to('simpanan/menyimpan') }}">Menyimpan</a></li>
                        <li class= {{ Request::is('simpanan/riwayat') ? 'active' : '' }}><a href="{{ URL::to('simpanan/riwayat') }}">Riwayat Simpanan</a></li>
                    </ul>
                </li>
                {{-- pembayaran --}}
                <li class="sub-menu class= {{ Request::is('pembayaran/*') ? 'active' : '' }}">
                    <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-widgets"></i> Pembayaran</a>
                    <ul>
                        <li class= {{ Request::is('pembayaran/pembayaran') ? 'active' : '' }}><a href="{{ URL::to('pembayaran/pembayaran') }}">Pembayaran</a></li>
                        <li class= {{ Request::is('pembayaran/riwayat') ? 'active' : '' }}><a href="{{ URL::to('pembayaran/riwayat') }}">Riwayat Pembayaran</a></li>
                    </ul>
                </li>
            @endif
        @endcan
        {{-- SIDEBAR MENU ADMIN --}}
        @can('admin-access')
            {{-- kelola pinjaman --}}
            <li class= {{ Request::is('kelola/pinjaman') ? 'active' : '' }} ><a href="{{ URL::to('kelola/pinjaman') }}" ><i class="zmdi zmdi-collection-text"></i> Kelola Pinjaman <span class="label label-danger">{{ App\Pinjaman::where('status','menunggu')->count() }}</span></a></li>
            {{-- kelola simpanan --}}
            <li class= {{ Request::is('kelola/simpanan') ? 'active' : '' }} ><a href="{{ URL::to('kelola/simpanan') }}" ><i class="zmdi zmdi-swap-alt"></i>Kelola Simpanan <span class="label label-danger">{{ App\Simpanan::where('status','menunggu')->count() }}</span></a></li>
            {{-- kelola pembayaran --}}
            <li class= {{ Request::is('kelola/pembayaran') ? 'active' : '' }} ><a href="{{ URL::to('kelola/pembayaran') }}" ><i class="zmdi zmdi-collection-item"></i> Kelola Pembayaran</a></li>
            {{-- kelola bunga --}}
            <li class= {{ Request::is('kelola/bunga') ? 'active' : '' }}><a href="{{ URL::to('kelola/bunga') }}" ><i class="zmdi zmdi-money"></i> Kelola Bunga</a></li>
            {{-- kelola tabungan --}}
            <li class= {{ Request::is('kelola/tabungan') ? 'active' : '' }}><a href="{{ URL::to('kelola/tabungan') }}" ><i class="zmdi zmdi-case"></i> Kelola Tabungan</a></li>
            {{-- kelola produk --}}
            <li class= {{ Request::is('kelola/produk') ? 'active' : '' }}><a href="{{ URL::to('kelola/produk') }}" ><i class="zmdi zmdi-pizza"></i> Kelola Produk</a></li>
            {{-- kelola akun --}}
            <li class= {{ Request::is('kelola/akun') ? 'active' : '' }}><a href="{{ URL::to('kelola/akun') }}" ><i class="zmdi zmdi-account"></i> Kelola Akun</a></li>
        @endcan
    </ul>
    @endif
</aside>

