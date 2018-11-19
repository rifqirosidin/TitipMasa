@extends('dashboard.user.sidebar')


@section('sidebar')

<div class="container">

        <h2 class="text-center my-xl-5">Daftar Trip</h2>
        @foreach($trips->TripInternational as $item)

        <div class="row" id="hover" >
            <div class="col-sm-12">
                <ul class="list-group" style="list-style-type: none;>
                    <li class="text-dark">
                        <a href="{{ route('trip.profil',[ $item->id, $item->user->username ]) }}" class="list-group-item text-dark">

                        <div class="row">
                            <div class="col-sm-1" style="margin-right: 25px">
                                <img src="{{ asset('default.png') }}" height="80" alt="foto" class="rounded-circle" alt="foto"></div>
                            <div class="col-sm-6">{{ $item->user->name }} <br> {{ $item->lokasi_destinasi }} - {{ $item->lokasi_pulang }}
                                <br>
                            {{ $item->tgl_pulang }}</div>
                        </div></a>


                    </li>

         

                </ul>
                @endforeach

            </div>

        </div>

@endsection

