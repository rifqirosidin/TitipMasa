@extends('dashboard.user.sidebar')

@section('sidebar')

    <div class="container">
       
        <div class="row" style="margin-top: 40px">
            <div class="col">
                <a href="{{ route('profil.edit', $user->id) }}" class="btn btn-primary float-right">Edit Profil</a>
                <h2>Profil Saya</h2>
            </div>
        </div>       


        <hr>

        <div class="row">
            <div class="col-sm-4">
                <img src="{{ asset('storage/'. $user->foto) }}" height="100" alt="Foto Profil" class="rounded">
                <p>{{ $user->name }}</p>
                <p>{{ $user->email }}</p>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <p>username : {{ $user->username }}</p>
                </div>
                <div class="row">
                   <p> No HP:  {{ $user->phone }} </p>
                </div>
                
                <div class="row">
                    <p> Alamat:  {{ $user->alamat }} </p>
                </div>
            </div>
        </div>

    </div>

@endsection