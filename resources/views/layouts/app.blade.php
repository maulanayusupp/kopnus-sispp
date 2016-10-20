<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISPP - @yield('title')</title>

    <!-- Vendor CSS -->
    <link href="{{ asset('assets/components/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/components/google-material-color/dist/palette.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/components/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/components/nouislider/distribute/jquery.nouislider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/components/farbtastic/farbtastic.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/components/chosen/chosen.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/components/summernote/dist/summernote.css') }}" rel="stylesheet">
    <!-- CSS -->
    <link href="{{ asset('assets/css/app.min.1.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.min.2.css') }}" rel="stylesheet">

    @yield('css')
</head>
<body data-ma-header="white">
    <section id="main">
        <br>
        {{-- sidebar menu --}}
        @include('layouts.includes.sidebar')
        <section id="content">
            <div class="container">
                {{-- navigation --}}
                @if(!Request::is('home'))
                    <div class="card c-dark palette-Orange bg">
                        <div class="card-header">
                            <h2><i class="zmdi zmdi-navigation"></i> @yield('title')</h2>
                        </div>
                    </div>
                @endif                
                {{-- FEEDBACK SYSTEM --}}
                @if(session()->has('flash_notification.message'))
                    <div class="container">
                        <div class="alert alert-{{ session()->get('flash_notification.level') }}">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ session()->get('flash_notification.message') }}
                        </div>
                    </div>
                @endif
                {{-- content --}}
                @yield('content')                
            </div>
        </section>

        {{-- footer --}}
        {{-- <div id="footer" class="footer navbar-fixed-bottom">
            Copyright &copy; 2016 Sistem Informasi Simpan Pinjam Pensiunan <br> Koperasi Nusantara Indonesia
        </div> --}}
        @if(!Request::is('home'))
            <footer id="footer">
                Copyright &copy; 2016 Sistem Informasi Simpan Pinjam Pensiun <br> Koperasi Nusantara Indonesia
            </footer>
        @endif
        
    </section>

    <!-- Javascript Libraries -->
    <script src="{{ asset('assets/components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/components/bootstrap/dist/js/bootstrap.min.js') }}"></script>        
    <script src="{{ asset('assets/components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/components/Waves/dist/waves.min.js') }}"></script>
    <script src="{{ asset('assets/components/bootstrap-growl/bootstrap-growl.min.js') }}"></script>
    <script src="{{ asset('assets/components/bootgrid/jquery.bootgrid.updated.min.js') }}"></script>

    <script src="{{ asset('assets/components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/components/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/components/nouislider/distribute/jquery.nouislider.all.min.js') }}"></script>
    <script src="{{ asset('assets/components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/components/typeahead.js/dist/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/components/summernote/dist/summernote-updated.min.js') }}"></script>
    
    <script src="{{ asset('assets/components/chosen/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/components/fileinput/fileinput.min.js') }}"></script>
    <script src="{{ asset('assets/components/input-mask/input-mask.min.js') }}"></script>
    <script src="{{ asset('assets/components/farbtastic/farbtastic.min.js') }}"></script>
    
    <script src="{{ asset('assets/js/functions.js') }}"></script>
    <script src="{{ asset('assets/js/actions.js') }}"></script>
    <script>
    function formatCurrency(num) {
        num = num.toString().replace(/\$|\,/g,'');
        if(isNaN(num))
            num = "0";
        sign = (num == (num = Math.abs(num)));
        num = Math.floor(num*100+0.50000000001);
        cents = num%100;
        num = Math.floor(num/100).toString();
        if(cents<10)
            cents = "0" + cents;
        for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
        num = num.substring(0,num.length-(4*i+3))+'.'+
        num.substring(num.length-(4*i+3));
        return (((sign)?'':'-') + 'Rp. ' + num + ',' + cents);
    }
    </script>
    @yield('js')
</body>
</html>