@extends('layouts.app')

@section('content')

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">

            @foreach($carousel as $row)
            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="{{$loop->iteration}}" class="active" aria-current="true" aria-label="Slide 1">
                <img class="img-fluid" src="{{asset('image/'.$row->file)}}" alt="Image">
            </button>

            @endforeach
        </div>
        <div class="carousel-inner">

            @foreach($carousel as $row)
            @php
            $isActive = $row->id == 1;
            @endphp
            <div class="carousel-item @if($isActive) active @endif ">
                <img class="w-100" src="{{asset('image/'.$row->file)}}" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h2 class="text-white text-uppercase mb-4 animated zoomIn">Bumi Serasan Sekate</h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- Facts Start -->

<!-- Facts End -->


<!-- About Start -->

<!-- About End -->


<!-- Service Start -->

<!-- Service End -->
<!-- Feature Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-green pe-3">News</h6>
                    <h1 class="display-6 mb-4">Mengenal IKAMUBA </h1>
                    <div class="row g-4">
                        <p class="mb-4">IKAMUBA adalah singkatan dari Ikatan Keluarga Musi Banyuasin,
                            Memelihara dan memantapkan hubungan silaturahim antara masyarakat Musi Banyuasin yang
                            berada di Kota Palembang atau tempat –tempat lainnya,
                            Pusat data dan informasi sebagai kekuatan real Masyarakat Muba di kota Palembang dengan jalan
                            mengaktifkan, mengakselerasikan dan menyatukan seluruh Ikatan Keluarga/Paguyuban Desa-desa asal
                            Muba yang berada di wilayah Kota Palembang</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="img-border text-black">
                    <img class="img-fluid" src="{{asset('frontend/Untitled.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Project Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Kunjungan Wisata </h6>
            <h1 class="display-6 mb-4">Mari Kita Kunjungi Wisata di MUBA</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
            @foreach($wisata as $row)
            <div class="project-item border rounded h-100 p-4" data-dot="{{$loop->iteration}}">
                <div  class="position-relative mb-4">
                    <img  style="  max-width: 100%;  height: auto;" class="img-fluid rounded" src="{{asset('image/'.$row->intro)}}" alt="">
                    <a href="{{asset('image/'.$row->intro)}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>{{$row->name}}</h6>
                <span class="d-inline-block text-truncate" style="max-width: 150px;">
                    {{$row->content}}
                </span>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Project End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Pengurus IKAMUBA</h6>
            <h1 class="display-6 mb-4">Serasan Sekate Adalah Moto Kami</h1>
        </div>
        <div class="row g-4">
            @foreach($pengurus as $row)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="{{asset('image/'.$row->foto)}}" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <h5>{{$row->nama}}</h5>
                            <span>{{$row->jabatan}} {{$row->dewan}}</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Berita</h6>
            <h1 class="display-6 mb-4">Kegiatan</h1>
            <div class="col-sm">
                <a href="{{route('kegiatanfrontend')}}" class="btn btn-primary btn-sm">Berita Lainnya</a>
            </div>
        </div>
    
        <div class="row g-4">
            <div class="blog" id="blog">
                <div class="container">
                    <div class="row">
                        @foreach($kegiatan as $row)
                        <div class="col-lg-6">
                            <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                                <div class="blog-img">
                                    <img src="{{asset('image/'.$row->file)}}" alt="Blog">
                                </div>
                                <div class="blog-text">
                                    <h2>{{$row->name}}</h2>
                                    <div class="blog-meta">
                                        <p><i class="far fa-user"></i>Admin</p>
                                        <p><i class="far fa-list-alt"></i>Web Design</p>
                                        <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                        <p><i class="far fa-comments"></i>5</p>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Nullam commodo mattis mi. Nullam eu erat lectus. Proin viverra risus vitae luctus. Proin ut ante, vitae sapien. Fusce sem ac erat rhoncus, ornare mattis nisl massa et eros vitae pulvin
                                    </p>
                                    <a class="btn" href="{{route('kegiatan.detail',$row)}}">Read More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection