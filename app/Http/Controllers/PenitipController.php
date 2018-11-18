<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
