@extends('dashboard.user.sidebar')

@section('sidebar')

    <div class="container">
        <div class="row">
            <div class="col">
                <h3  style="margin-top: 40px">Edit Profil</h3>

            </div>

        </div>
        <hr>
        <form action="{{ route('profil.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="foto">Foto Profil</label>
                        <input type="file" class="form-control" id="foto" name="foto" value="">
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="foto">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="name" value="{{ $user->name }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="nik">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" value="{{ $user->username }}">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $user->name }}">
                    </div>
                </div>
            </div>
           
            
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nohp">Phone</label>
                        <input type="text" name="nohp" class="form-control" value="{{ $user->phone}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="alamat">Alamat</label>
                    <div class="form-group">
                        <textarea name="alamat" class="form-control text-left"  id="alamat" cols="115" rows="5" class="form-control">
                     {{ $user->alamat  }}
                        </textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


@endsection