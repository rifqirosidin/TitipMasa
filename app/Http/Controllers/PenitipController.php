<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\TitipBarang;
use App\TripInternational;
class PenitipController extends Controller
{
   
    public function index($id)
    {
        $penitips = TripInternational::with('TitipBarang')->where('user_id' , $id)->first();

        // return $penitips;
        return view('dashboard.user.penitip.penitip', compact('penitips'));


    }

    public function  UpdateStatus($user_id, $id)
    {
         $status = TitipBarang::where([ 'user_id' => $user_id, 'id' => $id]);
         
         
         $status->update([
            'status' => 'diterima'
         ]);


         session()->flash('success', 'Barang Berhasil di update');

         return redirect()->back();

         // return redirect()->route('trip.profil', $user->id, $user->username);

    }

    public function TolakBarang($user_id, $id)
    {
        $status = TitipBarang::where([ 'user_id' => $user_id, 'id' => $id]);
                  
         $status->update([
            'status' => 'ditolak'
         ]);

        $status->delete();
         session()->flash('success', 'Barang Berhasil di tolak');
        return redirect()->back();
    }


    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
