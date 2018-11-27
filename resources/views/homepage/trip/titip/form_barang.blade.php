@extends('master')
@section('content')

@include('homepage.navbar')

<div class="container my-xl-5">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('tambah.barang') }}" method="POST" enctype="multipart/form-data" class="pb-5">
        @csrf
       
    <div class="row">
        <div class="col-sm-5">
            <div class="form-group">
                <label for="gambar_barang">Gambar Barang</label>
                <input type="file" name="gambar_barang" class="form-control" id="gambar_barang">
            </div>
            </div>
        </div>

        <input type="hidden" name="trip_id" class="form-control" value="{{ $trip->id }}">

    <div class="row">
        <div class="col-sm-5">

                <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang">
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-sm-5">

                <div class="form-group">
                    <label for="nama">Jumlah</label>
                    <input type="number" min="1" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah Barang">
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-sm-5">

                <div class="form-group">
                    <label for="nama">Harga</label>
                    <input type="text" class="form-control" name="harga_barang" id="harga_barang" placeholder="Harga Barang">
                </div>
            </div>
        </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="berat">Berat</label>
                            <select  class="custom-select" name="berat_barang" id="target" >
                                <option selected="">Pilih Berat Barang </option>
                                <option value="1"> < 1 kg</option>
                                <option value="2"> < 2 kg</option>
                                <option value="3">2 > kg</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <label for="">Pajak</label>
                        <input type="text" id="pajak" name="pajak" class="form-control" value="" readonly>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-7">
                        <label for="deskripsi_barang">Deskripsi Barang</label>
                        <div class="form-group">                            
                            <textarea name="deskripsi_barang" id="" cols="60" rows="5" placeholder="isi detail barang misal: ukuran, warna, dll"></textarea>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <button type="submit" name="titip" class="btn btn-primary col float-right">Titip Barang</button>
                    </div>
                </div>


        </div>
    </div>
    </form>
</div>
<script src="{{ asset('frontend/homepage/vendor/jquery/jquery.min.js') }}"></script>

<script type="text/javascript">
    
    var pajak =0;
    $( "select" ).change(function() {
        var harga =  $(this).children("option:selected").val();
        
        if(harga == '1'){
            pajak = 20000;        
        }else if(harga == '2'){
            pajak = 40000;
        }else {
            pajak = 50000;
        }

        $('#pajak').val(pajak);        
    
    });
    

</script>
    
    @stop