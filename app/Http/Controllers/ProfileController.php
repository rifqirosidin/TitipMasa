<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;
use Auth;
class ProfileController extends Controller
{
    
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
//        dd($user);
        return view('dashboard.user.profile.index', compact('user'));
    }


    public function create()
    {
        $user = Profile::where('user_id', Auth::user()->id)->first();

        return view('dashboard.user.profile.create', compact('user'));
    }

    public function store(Request $request)
    {
       

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('dashboard.user.profile.edit', compact('user'));
    }

  
    public function update(Request $request, $user_id)
    {
        $user = User::find(Auth::user()->id);
        $foto = $request->file('foto')->store('foto');

        

       $user->update([
            'user_id' => Auth::user()->id,
            'name' => $request->nama,
            'username' => $request->username,            
            'phone' => $request->phone,
            'foto' => $foto,
            'alamat' => $request->alamat
        ]);


        return view('dashboard.user.profile.index', compact('user'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
