@extends('master')
@section('content')

@include('homepage.navbar')

<div class="container m-xl-5">

@include('include.success')
@include('include.errors')
	<div class="col-sm">
		<h3>Konfirmasi Pembayaran</h3>
		
		<form action="{{ route('bukti.pembayaran', $user->id) }}" method="post" enctype='multipart/form-data'>
			@csrf

			<div class="row">
				<div class="col-sm-5">
					<hr class="py-2">
					<div class="form-group">
						<label for="nama">Nama Penerima</label>
						<input type="text" class="form-control" name="nama">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat Penerima</label>
						<textarea name="alamat" class="form-control" cols="4" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label for="alamat">Bukti Pembayaran</label>
						<input type="file" name="bukti_pembayaran" class="form-control"> 
					</div>

					<div class="form-group">
						
						<button type="submit" class="btn btn-primary col-sm-3 float-right">Kirim</button>
					</div>
					
				</div>
			</div>
			


		</form>
	</div>
</div>

</div>


@endsection