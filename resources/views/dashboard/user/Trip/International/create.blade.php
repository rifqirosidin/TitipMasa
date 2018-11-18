@extends('dashboard.user.sidebar')
@section('sidebar')

<form action="{{ route('trip.store') }}" method="post" class="my-xl-5">
    {{ csrf_field() }}

    <div class="container">
        @if($errors->count() > 0)
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

        @endif
        @include('include.success')

        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="from">Dari</label>
                    <select class="form-control" id="from" name="dari_lokasi" required>
                        <option value="" selected>Pilih Kota</option>

                        <option value="lamongan">Lamongan</option>
                        <option value="gresik">Gresik</option>
                        <option value="surabaya">Surabaya</option>
                        <option value="babat">Babat</option>

                    </select>

                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for="destinasi">Destinasi</label>
                    <select  class="form-control" id="destinasi" name="lokasi_destinasi" required>
                        <option value="" selected>Pilih Negara</option>
                        @foreach($countries as $country)
                            <option value="{{ $country->name }}">{{ $country->name }}</option>

                        @endforeach
                    </select>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="tgl_berangkat">Tanggal Berangkat</label>
                    <input type="date" name="tgl_berangkat" id="tgl_berangkat" class="form-control" min="{{ date("Y-m-d") }}" >
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="tgl_pulang">Tanggal Pulang</label>
                    <input type="date" name="tgl_pulang" id="tgl_pulang" class="form-control" min="{{ date("Y-m-d") }}" >
                </div>
            </div>
        </div>

       <div class="row">
               <div class="col-sm-4">
                   <div class="form-group">
                       <label for="lokasi_pulang">Pulang Ke</label>
                       <select class="form-control" id="lokasi_pulang" name="lokasi_pulang" required>
                           <option selected>Pilih Kota</option>
                           <option value="lamongan">Lamongan</option>
                           <option value="gresik">Gresik</option>
                           <option value="surabaya">Surabaya</option>
                           <option value="babat">Babat</option>

                       </select>

                   </div>
               </div>

       </div>

        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary m-auto">Post Trip</button>
                </div>
            </div>
        </div>

    </div>


</form>

@endsection


