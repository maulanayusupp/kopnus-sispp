<aside id="s-main-menu" class="sidebar">
    <br>
    {{-- CEK USER SUDAH LOGIN --}}
    @if(Auth::check())
    <ul class="main-menu">
        {{-- home --}}
        <li class="{{ Request::is('home') ? 'active' : '' }}">
            <a href="{{ URL::to('home') }}"><i class="zmdi zmdi-home"></i> Home</a>
        </li>
        {{-- SIDEBAR MENU MEMBER --}}
        @can('member-access')
            {{-- pinjaman --}}
            @if((Auth::user()->status) =='belum-aktif')
                <li class= {{ Request::is('aktivasi') ? 'active' : '' }}><a href="{{ route('aktivasi.edit', encrypt(Auth::user()->id) )}}"><i class="zmdi zmdi-seat"></i> Aktivasi</a></li>
            @else
                <li class="sub-menu {{ Request::is('pinjaman/*') ? 'active' : '' }}">
                    <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-compact"></i> Pinjaman</a>
                    <ul>
                        <li class= "{{ Request::is('pinjaman/meminjam') ? 'active' : '' }}">
                            <a href="{{ URL::to('pinjaman/meminjam') }}">Pengajuan Pinjaman</a>
                        </li>
                        <li class= "{{ Request::is('pinjaman/riwayat') ? 'active' : '' }}">
                            <a href="{{ URL::to('pinjaman/riwayat') }}">Riwayat Pinjaman</a>
                        </li>
                        <li class= "{{ Request::is('pembayaran/riwayat') ? 'active' : '' }}">
                            <a href="{{ URL::to('pembayaran/riwayat') }}">Riwayat Pembayaran</a>
                        </li>
                    </ul>
                </li>
                {{-- simpanan --}}
                <li class="sub-menu {{ Request::is('simpanan/*') ? 'active' : '' }}">
                    <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-list"></i> Simpanan</a>
                    <ul>
                        <li class= "{{ Request::is('simpanan/riwayat') ? 'active' : '' }}"d>
                            <a href="{{ URL::to('simpanan/riwayat') }}">Riwayat Simpanan</a>
                        </li>
                    </ul>
                </li>
            @endif
        @endcan
        {{-- SIDEBAR MENU ADMIN --}}
        @can('admin-access')
            {{-- kelola pinjaman --}}
            <li class="sub-menu {{ Request::is('kelola/pinjaman') || Request::is('kelola/pinjaman/verifikasi') ? 'active' : '' }}">
                <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-collection-text"></i> Pinjaman 
                    {{-- NOTIFIKASI --}}
                    @if( (App\Pinjaman::where('status','menunggu')->count())>0 )
                        <span class="label label-danger">{{ App\Pinjaman::where('status','menunggu')->count() }}</span>
                    @endif
                </a>
                <ul>
                    {{-- DROPDOWN PINJAMAN--}}
                    <li class= "{{ Request::is('kelola/pinjaman/verifikasi') ? 'active' : '' }}" >
                        <a href="{{ URL::to('kelola/pinjaman/verifikasi') }}" > Verifikasi Pengajuan Pinjaman 
                            {{-- NOTIFIKASI --}}
                            @if( (App\Pinjaman::where('status','menunggu')->count())>0 )
                                <span class="label label-danger">{{ App\Pinjaman::where('status','menunggu')->count() }}</span>
                            @endif
                        </a>
                    </li>
                    <li class= "{{ Request::is('kelola/pinjaman') ? 'active' : '' }}" >
                        <a href="{{ URL::to('kelola/pinjaman') }}" > Riwayat Pinjaman 
                        </a>
                    </li>                    
                    {{-- DROPDOWN PEMBAYARAN--}}                    
                    <li class= "{{ Request::is('pembayaran/pembayaran') ? 'active' : '' }}">
                        <a href="{{ URL::to('pembayaran/pembayaran') }}">Pembayaran</a>
                    </li>
                    <li class= "{{ Request::is('kelola/pembayaran') ? 'active' : '' }}" >
                        <a href="{{ URL::to('kelola/pembayaran') }}" > Riwayat Pembayaran</a>
                    </li>
                </ul>
            </li>
            {{-- kelola simpanan --}}
            <li class="sub-menu {{ Request::is('kelola/simpanan') || Request::is('kelola/simpanan/verifikasi') ? 'active' : '' }}">
                <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-swap-alt"></i> Simpanan 
                    {{-- NOTIFIKASI --}}
                    @if((App\Simpanan::where('status','menunggu')->count())>0)
                        <span class="label label-danger">{{ App\Simpanan::where('status','menunggu')->count() }}</span>
                    @endif
                </a>
                <ul>
                    {{-- DROPDOWN --}}
                    <li class= "{{ Request::is('simpanan/menyimpan') ? 'active' : '' }}">
                        <a href="{{ URL::to('simpanan/menyimpan') }}">Tabungan SiKopNus</a>
                    </li>
                    <li class= "{{ Request::is('kelola/simpanan') ? 'active' : '' }}" >
                        <a href="{{ URL::to('kelola/simpanan') }}" > Riwayat Tabungan 
                        </a>
                    </li>
                </ul>
            </li>
            {{-- LAPORAN --}}
            <li class= "{{ Request::is('kelola/laporan') ? 'active' : '' }}">
                <a href="{{ URL::to('kelola/laporan') }}"><i class="zmdi zmdi-book"></i> Laporan</a>
            </li>
            {{-- MASTER --}}
            <li class="sub-menu {{ Request::is('kelola/akun') || Request::is('kelola/akun/daftar-member') ? 'active' : '' }}">
                <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-settings"></i> Master  
                </a>
                <ul>
                    {{-- DROPDOWN --}}
                    <li class= "{{ Request::is('kelola/produk') ? 'active' : '' }}">
                        <a href="{{ URL::to('kelola/produk') }}" > Produk</a>
                    </li>
                    <li class= "{{ Request::is('kelola/tabungan') ? 'active' : '' }}">
                        <a href="{{ URL::to('kelola/tabungan') }}" > Rekening</a>
                    </li>
                    <li class= "{{ Request::is('kelola/bunga') ? 'active' : '' }}">
                        <a href="{{ URL::to('kelola/bunga') }}" > Bunga</a>
                    </li>                    
                    <li class= "{{ Request::is('kelola/akun') ? 'active' : '' }}" >
                        <a href="{{ URL::to('kelola/akun') }}" > Users</a>
                    </li>
                </ul>
            </li>

            
                    
        @endcan
        {{-- option --}}
        <hr>
        <li class="sub-menu">
            <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-account"></i><font color="brown"> {{ Auth::user()->name }}</font>
            </a>
            <ul>
                @can('member-access')
                    <li>
                        <a href="{{ route('profile.show', encrypt(Auth::user()->id))}}" > <font color="black">Data Saya</font></a>
                    </li>
                @endcan
                <li>
                    <a href="{{ url('/logout') }}" > Logout </a>
                </li>
            </ul>
        </li>
    </ul>
    @endif
</aside>