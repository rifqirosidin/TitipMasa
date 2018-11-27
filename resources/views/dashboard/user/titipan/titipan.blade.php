@extends('dashboard.user.sidebar')
@section('sidebar')

<div class="container my-xl-5">
	<div class="row">
		<div class="col-sm-12">
			<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th >      
      <th scope="col">Gambar</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga</th>
      <th scope="col">status</th>      
      <th scope="col">Transaksi</th>
      <th scope="col">Aksi</th>
     
    </tr>
  </thead>
  <tbody>

  	@forelse($titips  as $titip)

    <tr>
    	<td>{{ $loop->iteration }}</td>
      <td><img src="{{ asset('storage/'. $titip->gambar_barang)  }}" height="50" width="100"></td>
      
      <td><a href="">{{ $titip->nama_barang }}</a></td>
      <td>{{ $titip->harga }}</td>
      <td>{{ $titip->status }}</td>
      @if($titip->status == 'diterima')
      <td><a href="{{ route('konfirmasi', $titip->user->id)}}" class="btn btn-success">Lanjutkan Pembayaran</a></td>
      @else
      <td></td>
       @endif
       <td> 
        <a href="#"><i class="fas fa-eye"></i></a>
        <a href="#"><i class="fas fa-edit"></i></a>
        <a href="#"><i class="fas fa-trash"></i></a>


      </td>
    </tr>
    @empty
      <tr>
        <td colspan="7" class="text-center">Tidak ada barang</td>
      </tr>
   @endforelse
  </tbody>
</table>
		</div>
	</div>
</div>

@endsection