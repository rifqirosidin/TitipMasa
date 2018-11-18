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
      <th scope="col">Aksi</th>
     
    </tr>
  </thead>
  <tbody>
        @foreach($penitips->TitipBarang as $item)
        <tr>
        	<td>{{ $loop->iteration }}</td>
          <td><img src="{{ asset('storage/'. $item->gambar_barang)  }}" height="50" width="100"></td>
          <td><a href="">{{ $item->nama_barang }}</a></td>
          <td>{{ $item->harga }}</td>
           
        </tr>
   @endforeach
  </tbody>
</table>
		</div>
	</div>
</div>

@endsection