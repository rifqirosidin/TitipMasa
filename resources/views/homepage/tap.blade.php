  <div>
  <div class="text-center nav nav-tabs " id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-local-tab" data-toggle="tab" href="#nav-local" role="tab" aria-controls="nav-local" aria-selected="true"
    style="width: 550px;">Internasional</a>
    <a class="nav-item nav-link" id="nav-internasional-tab" data-toggle="tab" href="#nav-internasional" role="tab" aria-controls="nav-internasional" aria-selected="false"
    style="width: 550px;">Lokal</a>

  </div>
</div>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-local" role="tabpanel" aria-labelledby="nav-local-tab">
        
      <div class="row" style="margin-top: 50px">
        @foreach($countries as $country)
        <div class="col-lg-4 col-sm-6 portfolio-item text-center">

            <div class="card h-100">
                <a href="{{ route('list_trip', $country->slug) }}"><img class="card-img-top" src="{{ asset('storage/internasional/' . $country->code . '.jpg') }}" alt="Gambar" height="200px"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{ route('list_trip', $country->slug) }}">{{ $country->name }}</a>
                    </h4>
                    <p class="card-text ">Traveller {{ $country->TripInternational->count() }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="center">
    {{ $countries->onEachSide(1)->links() }}
  </div>

  </div>
  <div class="tab-pane fade" id="nav-internasional" role="tabpanel" aria-labelledby="nav-internasional-tab">
    <div class="row" style="margin-top: 50px">
        @foreach($kotas as $kota)
        <div class="col-lg-4 col-sm-6 portfolio-item text-center">

            <div class="card h-100">
                <a href="{{ route('list_trip', $kota->slug) }}"><img class="card-img-top" src="{{ asset('storage/lokal/' . $kota->code . '.jpg') }}" alt="Gambar" height="200px"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{ route('list_trip', $kota->slug) }}">{{ $kota->name }}</a>
                    </h4>
                    <p class="card-text ">Traveller {{ $kota->TripLokal->count() }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="center">
    {{ $kotas->onEachSide(1)->links() }}
  </div>

  </div>

</div>