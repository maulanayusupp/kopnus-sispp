<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | Sistem</title>
        
        <!-- Vendor CSS -->
        <link href="{{ asset('assets/components/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/components/google-material-color/dist/palette.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
            
        <!-- CSS -->
        <link href="{{ asset('assets/css/app.min.1.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/app.min.2.css') }}" rel="stylesheet">
    </head>
    
    <body>
        <div class="login" data-lbg="teal">
            {{-- login --}}
            <div class="l-block toggled" id="l-login">
                <div class="lb-header palette-Orange bg">
                    <center>
                        <img src="{{ asset('assets/img/logo-small.png') }}" class="img-responsive">
                        <h4><font color="white">Sistem Informasi<br>Simpanan Pinjaman Pensiun<BR>Koperasi Nusantara</font></h4>
                    </center>
                </div>
                
                <div class="lb-body">
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
                        {{-- EMAIL --}}
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="fg-line">
                                <label class="fg-label">Email Address</label>
                                <input type="text" class="input-sm form-control fg-input" id="{{ $errors->has('email') ? ' inputError1' : '' }}" name="email" value="{{ old('email') }}">
                                
                            </div>
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        {{-- PASSWORD --}}
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="fg-line">
                                <label class="fg-label">Password</label>
                                <input type="password" class="input-sm form-control fg-input" class="form-control" name="password">
                                
                            </div>
                        </div>
                         @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        {{-- BUTTON SUBMIT --}}
                        <center><button type="submit" class="btn palette-Orange bg">Masuk</button></center>
                    </form>
                
                    <div class="m-t-20">
                        <center>
                            <a data-bg="blue" class="palette-Teal text d-block m-b-5" href="{{ URL::to('register') }}">Daftar?</a>
                        </center>
                    </div>
                </div>
                
            </div>

            {{-- lupa password --}}
            @include('auth.elements.forgetpass')
        </div>

        <!-- Javascript Libraries -->
        <script src="{{ asset('assets/components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/components/Waves/dist/waves.min.js') }}"></script>

        <script src="{{ asset('assets/js/functions.js') }}"></script></body>

</html>