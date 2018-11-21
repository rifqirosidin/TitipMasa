<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\TripInternational;
use App\User;
use App\TitipBarang;

class HomepageController extends Controller
{
    public function index()
    {
        $countries = Country::paginate(12);

        return view('homepage.index', compact('countries'));
    }

    public function dashboard()
    {
        $trips = TripInternational::get();
        $titips = TitipBarang::get();
        
        return view('dashboard.user.sidebar', compact('trips', 'titips'));
    }

    public function list_trip($slug)
    {
        $country = Country::where('slug', $slug)->first();

        $trips = TripInternational::where('lokasi_destinasi', $country->name)->paginate(6);

        return view('homepage.trip.list_trip', compact('country', 'trips'));
    }

    public function tripProfil($id, $username)
    {
        $user = User::where('username', $username)->first();
        $trip = TripInternational::where(['id' => $id, 'user_id' => $user->id])->first();
        $titips = TitipBarang::where('TripInternational_id', $id)->paginate(4);
        $country = Country::where('name', $trip->lokasi_destinasi)->first();
        
        return view('homepage.trip.profil_trip', compact('trip', 'user', 'titips', 'country'));

    }

    public function titipBarang()
    {

      
    }

    
}
