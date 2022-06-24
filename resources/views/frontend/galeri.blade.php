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
<div class="row">
    @foreach($galeri as $row)
    <div class="col-md-4 mb-4">
    <a href="{{asset('image/'.$row->file)}}" data-lightbox="project" data-gallery="example-gallery" class="col-sm-4">
		<img src="{{asset('image/'.$row->file)}}" class="img-fluid">
	</a>
    </div>
	@endforeach

</div>

</div>

@endsection