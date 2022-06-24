@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-3">Galeri Kegiatan Ikamuba</h1>
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
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="{{asset('image/'.$kegiatan->file)}}" alt="">
                    <h1 class="mb-4">{{$kegiatan->name}}</h1>
                    <p>{{$kegiatan->desc}}</p>
                  
                </div>
                <!-- Blog Detail End -->

            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
            

                <!-- Recent Post Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Recent Post</h3>
                    </div>
               @foreach($kegiatanlain as $row)
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="{{asset('image/'.$row->file)}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" style="width:100% ;" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">{{$row->name}}
                        </a>
                    </div>
                    @endforeach
                </div>
                <!-- Recent Post End -->

             

             
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
</div>

@endsection