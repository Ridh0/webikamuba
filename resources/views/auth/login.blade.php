<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assetslogin') }}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('assetslogin') }}/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assetslogin') }}/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('assetslogin') }}/css/style.css">

 
    <title>Login #2</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background: #2b6777;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-4  align-items-center justify-content-center text-center">
                    <div style="background:#ffffff;" class="mb-4 card pt-2">
                        <h3>IKA <strong>MUBA</strong></h3>
                    </div>
                    <a href="index.html"><img  src="{{ asset('frontend') }}/assets/img/logo-muba2.png" alt=""></a>
                    <div  class="mt-4 text-white pt-2">
                    <h6>Ikatan Keluarga Musi Banyuasin</h6>                                                

                    </div>
                    <HR class="text-white" style="border-color:white;"></HR>
                    <div  class="mt-2 text-white pt-2">
                        <h4>
                           <strong>
                               SERASAN SEKATE
                            </strong> 
                        </h4>

                    </div>
                </div> 
            </div> 
        </div>
    </div>
    <div class="contents order-2 order-md-1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <h3>Selamat Datang Di Website <strong>IKA MUBA</strong></h3>
                    <p class="mb-4">Silahkan login atau daftar :) </p>
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="post">
                 
                    @csrf
                        <div class="form-group first">
                            <label for="username">Username</label>
                            <input type="text" name="login" class="form-control" value="{{ old('email') }}"  id="username">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group last mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                         <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                        </div>
                        
                        <div class="d-flex mb-5 align-items-center">
                       <span class="caption"><a href="{{ route('register') }}" class="forgot-pass">Daftar</a></span>
                       @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="caption ml-auto ">
                                <small>{{ __('Forgot password?') }}</small>
                            </a>
                        @endif
                    </div>
                    <input type="submit" value="Log In" style="background:#2b6777; border:none;" class="btn btn-block btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>

    
  </div>
  </div>
    
    
    <script src="{{ asset('assetslogin') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('assetslogin') }}/js/popper.min.js"></script>
    <script src="{{ asset('assetslogin') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assetslogin') }}/js/main.js"></script>
  </body>
</html>