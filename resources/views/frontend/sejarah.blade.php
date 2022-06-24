@extends('layouts.app')

@section('content')
   <!-- Page Header Start -->
   <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">Sejarah Ikamuba</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('frontend')}}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Sejarah</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-certificate fa-4x text-green mb-4"></i>
                        <h5 class="mb-3">Berdiri Pada Tanggal</h5>
                        <h1 class="display-6 mb-0" data-toggle="counter-up" >4   </h1>
                        <h1 class="display-6 mb-0" >Juni </h1>
                        <h1 class="display-6 mb-0" data-toggle="counter-up">1987 </h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users-cog fa-4x text-green mb-4"></i>
                        <h5 class="mb-3">Periode Saat Ini</h5>
                        <h1 class="display-6 mb-0" data-toggle="counter-up">2022</h1>
                        <h1 class="display-6 mb-0">-</h1>
                        <h1 class="display-6 mb-0" data-toggle="counter-up">2026</h1>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!-- Facts End -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img-border">
                        <img class="img-fluid" src="{{asset('frontend/Untitled.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-green pe-3">About Us</h6>
                        <h1 class="display-6 mb-4">#sejarah Mari Kenal <span class="text-greeny">IKAMUBA</span> Lebih Jauh</h1>
                        <p>IKAMUBA didirikan di Palembang, pada tanggal 4 Juni 1987 dan didirikan oleh beberapa orang tokoh masyarakat Musi Banyuasin yang berdomisili di Kota Palembang</p>
                        <p class="mb-4">Didasari oleh semangat kebersamaan dan kecintaan para sesepuh, tokoh masyarakat Musi Banyuasin yang berdomisili di Palembang diharapkan silaturahmi antar sanak dulur dirantau tetap terjaga. Serasan Sekate sebagai moto daerah Kabupaten Musi Banyuasin dapat teraktualisasi dalam kehidupan sehari-hari masyarakat asal Musi Banyuasin dimanapun berada</p>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection