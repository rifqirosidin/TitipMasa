
@extends('master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/profil.css') }}"></link>
    @include('homepage.navbar')
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <div class="container" style="margin-top: 60px">
        <div class="fb-profile">
            <img align="left" class="fb-image-lg" src="{{ asset('storage/internasional/' .$country->code . '.jpg') }}" height="280" alt="Profile image example"/>
            <img align="left" class="fb-image-profile thumbnail" height="200" width="10px" src="{{ asset('storage/'. $trip->user->foto) }}" alt="Profile image example"/>
        </div>
        <h2>{{ $trip->user->name }}</h2>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="text-right"> Trip Mulai : {{ $trip->tgl_berangkat }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p class="text-right"> Trip Berakhir : {{ $trip->tgl_pulang }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p class="text-right"> Trip Lokasi : <b>{{ $trip->lokasi_destinasi }} - {{ $trip->lokasi_pulang }}</b></p>
            </div>
        </div>
        <hr>
        <div class="row text-left">
            <div class="col-sm-12 ">
                <a href="{{ route('form.barang', $trip->user->id) }}" class="btn btn-primary col-sm-12 float-left text-left">Tambah Titipan Baru</a>


            </div>
        </div>
        <div class="row">
            <div class="col">
                
            </div>
        </div>
    </div>

@push('footer')
@include('homepage.footer')
@endpush

@endsection
