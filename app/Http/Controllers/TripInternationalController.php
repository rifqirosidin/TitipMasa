<?php

namespace App\Http\Controllers;

use App\TripInternational;
use App\Country;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;
use App\User;

class TripInternationalController extends Controller
{
   
    public function index()
    {
        $trips = User::with('TripInternational')->where('id', Auth::user()->id)->first();

        // return $trips;
        // $country = Country::where('name', $trips->lokasi_destinasi)->first();

        return view('dashboard.user.Trip.International.index', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('dashboard.user.trip.international.create', compact('countries'));
    }

    public function store(Request $request)
    {
//        dd($request->all());

        $validate = $this->validate($request, [
            'dari_lokasi' => 'required',
            'lokasi_destinasi' => 'required',
            'tgl_berangkat' => 'required',
            'tgl_pulang' => 'required',
            'deskripsi' => 'required'
        ]);

        TripInternational::create([
            'lokasi_dari' => $request->dari_lokasi,
            'user_id' => Auth::user()->id,
            'lokasi_dari' => $request->dari_lokasi,
            'lokasi_destinasi' => $request->lokasi_destinasi ,
            'tgl_berangkat' => $request->tgl_berangkat,
            'tgl_pulang' => $request->tgl_pulang,
            'lokasi_pulang' => $request->lokasi_pulang,
            'deskripsi' => $request->deskripsi
        ]);

        Session::flash('success', 'Trip Berhasil Dibuat');

        return redirect()->back();
    }

    public function show(TripInternational $tripInternational)
    {


    }


    public function edit(TripInternational $tripInternational)
    {
        //
    }


    public function update(Request $request, TripInternational $tripInternational)
    {
        //
    }


    public function destroy(TripInternational $tripInternational)
    {
        //
    }


}
