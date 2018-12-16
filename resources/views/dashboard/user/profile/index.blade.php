@extends('dashboard.user.sidebar')

@section('sidebar')

    <div class="container">
       
        <div class="row" style="margin-top: 20px">
            <div class="col">
                <a href="{{ route('profil.edit', $user->id) }}" class="btn btn-primary float-right">Edit Profil</a>
                <h2>Profil Saya</h2>
            </div>
        </div>       


        <hr>

        <div class="row">
            <div class="col-sm-3">
                <img src="{{ asset('storage/'. $user->foto) }}" height="100" width="80px" alt="Foto Profil" class="rounded">


            </div>
            <div class="col-sm-6">
                <div class="row">
                    <p>Nama <span style="margin-left: 20px">:</span> {{ $user->name }}</p>
                </div>
                <div class="row">
                    <p> E-mail <span style="margin-left: 20px">:</span> {{ $user->email }}</p>
                </div>
                <div class="row">
                    <p>username :  {{ $user->username }}</p>
                </div>
                <div class="row">
                   <p> No HP<span style="margin-left: 20px">:</span>  {{ $user->phone }} </p>
                </div>
                
                <div class="row">
                    <p> Alamat <span style="margin-left: 20px">:</span>  {{ $user->alamat }} </p>
                </div>
            </div>
        </div>

    </div>

@endsection