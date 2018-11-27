
@extends('master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/profil.css') }}"></link>
    @include('homepage.navbar')
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <div class="container" style="margin-top: 60px">
        @include('include.success')
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
           
            @if(Auth::check())
                @if($trip->user->id == Auth::user()->id)

                <a href="{{ route('form.barang', $trip->user->id) }}" class="btn btn-primary col-sm-12 float-left text-left">Tambah Rekomendasi Barang</a>

                @else
                <a href="{{ route('form.barang', $trip->user->id) }}" class="btn btn-primary col-sm-12 float-left text-left">Tambah Titipan Baru </a>

                @endif
            @else
                <a href="{{ route('form.barang', $trip->user->id) }}" class="btn btn-primary col-sm-12 float-left text-left">Tambah Titipan Baru </a>
            
                @endif
          
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5 class="text-center m-xl-5">Daftar Titipan</h5>
            <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Gambar Barang</th>
                      <th scope="col">Nama Penitip</th>
                      <th scope="col">Nama Barang</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Status</th>
                      @if(Auth::check())
                      @if($trip->user->id == Auth::user()->id)                      
                       <th scope="col">Aksi</th>                      
                      @endif
                      @endif
                     
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($titips as $titip)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td><img src="{{ asset('storage/'. $titip->gambar_barang) }}" height="50" width="80"></td>
                      <td>{{ $titip->user->name }}</td>
                      <td>{{ $titip->nama_barang }}</td>
                      <td>{{ $titip->harga }}</td>
                      <td>{{ $titip->status }}</td>
                      <td>

                @if(Auth::check())
                    @if($trip->user->id == Auth::user()->id)
                        @if($titip->status != 'diterima')
                                                
                        <a href="{{ route('barang.diterima', [$titip->user->id,  $titip->id]) }}" class="btn btn-primary" name="terima" style="margin-right: 10px" 
                        >Terima</a>
                         <a href="{{ route('barang.ditolak', [$titip->user->id,  $titip->id]) }}" class="btn btn-danger" name="tolak">Tolak</a></td>
                        @else
                          @if($titip->status == 'diterima')
                          <a href="{{ route('barang.ditolak', [$titip->user->id,  $titip->id]) }}" class="btn btn-danger" name="tolak">Batal</a></td>
                          
                         
                          @endif
                     @endif
                     @endif
                @endif
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">Tidak Ada Titipan Barang</td>
                    </tr>
                    @endforelse
          </tbody>
        </table>

            </div>
        </div>
        <div class="row float-right">
            <div class="col-sm-12 ">{!! $titips->links() !!} </div>
        </div>
    </div>

@push('footer')
@include('homepage.footer')
@endpush

@endsection
