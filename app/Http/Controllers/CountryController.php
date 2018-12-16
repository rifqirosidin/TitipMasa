<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Kota;
class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::paginate(12);
        $kotas = Kota::paginate(12);

        return view('homepage.index', compact('countries', 'kotas'));
    }


}
