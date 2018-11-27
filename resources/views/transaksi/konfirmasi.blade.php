@extends('master')
@section('content')

@include('homepage.navbar')
<div class="container ">
	<h4 class="text-center py-5">Ringkasan Titipan</h4>
	<div class="row">
		<div class="col-sm">
			<table class="table table-striped">
		  <thead>
		    <tr>		  
		      <th scope="col">Nama Barang</th>
		      <th scope="col">Berat Barang</th>
		      <th scope="col">Jumlah</th>
		      <th scope="col">Harga</th>
		      <th scope="col">Total</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($barangs as $barang)
		    <tr>		     
		      <td>{{ $barang->nama_barang }}</td>
		      <td>{{ $barang->berat_barang }}</td>
		      <td>{{ $barang->jumlah }}</td>
		      <td>{{ $barang->harga }}</td>
		      <td>{{ $barang->harga }}</td>
		    </tr>
		    @endforeach
		    <tr>		    	
		    	<td></td>
		    	<td></td>
		    	<td></td>
		    	<td><strong>Pajak</strong></td>
		    	<td >{{ $pajak  }}</td>
		    </tr>		   
		    <tr>
		    	<td></td>
		    	<td></td>
		    	<td></td>
		    	<td><strong>Total</strong></td>
		    	<td>{{ $total + $pajak }}</td>
		    	
		    </tr>
	    
		  </tbody>
		</table>
		<div class="row">
			<div class="col-sm">
				Silahkan tranfer pembayaran sesuai bank dibawah ini
				<h6>Bank Mandiri 166-00-021188803 Atas nama Rifqi Rosidin</h6>
			</div>
			<div class="col-sm">
				<a href="{{ route('titip.pembayaran', $barang->user->id ) }}" class="btn btn-primary float-right">Konfirmasi</a>
			</div>
		</div>
		
		</div>
	</div>
</div>


@endsection