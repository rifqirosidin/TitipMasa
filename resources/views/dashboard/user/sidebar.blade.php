@extends('master')
@section('content')
    @include('homepage.navbar')

    <div class="container">
        <div class="row">
            <div class="col-sm-3 mb-3 my-xl-5">
                <div class="list-group">
                    <a href="" class="list-group-item">Home</a>
                    <a href="{{ route('trip.create') }}" class="list-group-item">Post Trip</a>
                    <a href="{{ route('profil.index') }}" class="list-group-item">Profil</a>
                     <a href="{{ route('trip.index') }} " class="list-group-item">Trips</a>
                    <a href="{{ route('penitip.index', Auth::user()->id) }}" class="list-group-item">Penitip</a>
                    <a href="{{ route('titipan.index', Auth::user()->id) }} " class="list-group-item">Titipan</a>

                </div>
            </div>
            <div class="col-sm-9">
                @yield('sidebar')
            </div>

        </div>


    </div>
@endsection