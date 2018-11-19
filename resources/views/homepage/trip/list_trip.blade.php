@extends('master')
@section('content')
<!-- <style type="text/css">
    a:hover {
        background-color: blue;
    }
</style> -->
@include('homepage.navbar')

    <div class="container">
        <h2 class="text-center my-xl-5">{{ $country->name }}</h2>
        @foreach($trips as $trip)

        <div class="row" id="hover" >
            <div class="col-sm-12">
                <ul class="list-group" style="list-style-type: none;>
                    <li class="text-dark">
                        <a href="{{ route('trip.profil',[ $trip->id, $trip->user->username]) }}" class="list-group-item text-dark">

                        <div class="row">
                            <div class="col-sm-1">
                                <img src="{{ asset('default.png') }}" height="80" alt="foto" class="rounded-circle" alt="foto"></div>
                            <div class="col-sm-4">{{ $trip->user->name }} <br> {{ $trip->lokasi_destinasi }} - {{ $trip->lokasi_pulang }}
                                <br>
                            {{ $trip->tgl_pulang }}</div>
                        </div></a>


                    </li>

         

                </ul>

            </div>

        </div>
        @endforeach
        <div class="row float-right" style="margin-top: 30px"">
            <div class="col-sm-12 ">
                {!! $trips->links() !!}
            </div>
        </div>
        
    </div>

@push('footer')
@include('homepage.footer')
@endpush

@push('script')
<script type="text/javascript">

</script>
@endpush

@endsection