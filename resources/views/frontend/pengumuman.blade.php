@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-3">Pengumuman</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="{{route('frontend')}}">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pengumuman</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Facts Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pengumuman 1</td>
                        <td><a href="#" class="btn btn-dark ">download</a></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection