<ul class="pull-right h-menu">

    <li class="dropdown hm-profile">
        <a data-toggle="dropdown" href="#">
            <img src="{{ asset('assets/img/profile-pics/1.png') }}" alt=""> <br> {{ Auth::user()->name }} ({{ Auth::user()->role }})
        </a>

        <ul class="dropdown-menu pull-right dm-icon">
            <li>
                <a href="profile-about.html"><i class="zmdi zmdi-account"></i> Profil Saya</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-input-antenna"></i> Ganti Password</a>
            </li>
            <li>
                <a href="{{ url('/logout') }}"><i class="zmdi zmdi-time-restore"></i> Logout</a>
            </li>
        </ul>
    </li>
</ul>