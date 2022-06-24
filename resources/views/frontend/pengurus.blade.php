@extends('layouts.app')

@section('content')

<!-- Carousel Start -->

<!-- Carousel End -->


<!-- Facts Start -->

<!-- Facts End -->


<!-- About Start -->

<!-- About End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-green px-3">Dewan Pengurus Ikamuba</h6>
        </div>
        <div class="row g-4 mb-5">
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
                            <a class="btn btn-square btn-green rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-green rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-green rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach($pengurus2 as $row)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="{{asset('image/'.$row->foto)}}" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <p>{{$row->nama}}</p>
                            <span>{{$row->jabatan}} {{$row->dewan}}</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-green rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-green rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-green rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach($pengurus3 as $row)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="{{asset('image/'.$row->foto)}}" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <p>{{$row->nama}}</p>
                            <span>{{$row->jabatan}} {{$row->dewan}}</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-green rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-green rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-green rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-green px-3">Pengurus Harian Ikamuba</h6>
        </div>
        <div class="row g-4">

            @foreach($pengurus4 as $row)
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="{{asset('image/'.$row->foto)}}" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <p>{{$row->nama}}</p>
                            <span>{{$row->jabatan}} {{$row->dewan}}</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-green rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-green rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-green rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach($pengurus5 as $row)
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="{{asset('image/'.$row->foto)}}" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <p>{{$row->nama}}</p>
                            <span>{{$row->jabatan}} {{$row->dewan}}</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-green rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-green rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-green rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach($pengurus6 as $row)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="{{asset('image/'.$row->foto)}}" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <p>{{$row->nama}}</p>
                            <span>{{$row->jabatan}} {{$row->dewan}}</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-green rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-green rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-green rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->








<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Pengurus IKAMUBA</h6>
            <h1 class="display-6 mb-4">Pengurus Lainnya</h1>
        </div>
        <table id="example" class="table table-hover">
            <thead class="text-white" style="background-color: #2b6777;">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Dewan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengurus7 as $row)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->nama}}</td>
                    <td>{{$row->jabatan}}</td>
                    <td>{{$row->dewan}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Testimonial End -->
@endsection