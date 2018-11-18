<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TripInternational;
use App\User;
use App\TitipBarang;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {

        $titips = TitipBarang::get();

        return view('dashboard.user.sidebar', compact('trip'));
    }




}
