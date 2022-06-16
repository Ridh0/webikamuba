@extends('layouts.app-admin')

@section('content')
@include('layouts.headers.mini-header', [
'breadcumb' => __('Tabel Budaya') ,
'breadcumb2' => __('Data') ,
'tambah'=> __('addbudaya') ,
'route' => __('home')
])

<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Tambah Data Budaya</h3>
                </div>
                <!-- Light table -->
                <div class="card-body">
                    <form method="post" action="{{ route('carousel.store') }}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('post')

                        <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>

                        @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif


                        <div class="pl-lg-4">
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                <select name="kategori_id" id="" class="form-control">
                                    @foreach($kategori as $row)
                                    <option value="{{$row->id}}">{{$row->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group{{ $errors->has('file') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-email">{{ __('Foto') }}</label>
                                <input type="file" class="form-control form-control-alternative{{ $errors->has('file') ? ' is-invalid' : '' }}" name="file" id="customFileLang" lang="en">
                                @if ($errors->has('file'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('file') }}</strong>
                                </span>
                                @endif
                            </div>




                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- Card footer -->

            </div>
        </div>
    </div>
    <!-- Dark table -->


    @include('layouts.footers.auth')
</div>
@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script></script>
<!-- Argon JS -->
<script src="{{ asset('argon') }}/js/argon.min.js"></script>
@endpush