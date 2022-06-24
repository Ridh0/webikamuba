@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-3">Kegiatan Ikamuba</h1>
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
            @foreach($kegiatan as $row)
            <div class="col-lg-6 col-md-6 wow fadeInUp " data-wow-delay="0.1s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="">
                    <img class="img-fluid rounded mb-4" src="{{asset('image/'.$row->file)}}" alt="">
                    <h4 class="mb-0">{{$row->name}}</h4>
                    <div class="wrapper rounded">
                        <h6 class="demo-1">
                        {{$row->desc}}</h6>
                    </div>
                </a>
            </div>

            @endforeach
        </div>
    </div>
</div>

@endsection