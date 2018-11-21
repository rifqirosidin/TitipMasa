<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TripInternational;
use App\TitipBarang;
use App\User;
use Auth;
class TitipBarangController extends Controller
{
    
    public function index($id)
    {
        $titips = TitipBarang::where('user_id', $id)->get();


        return view('dashboard.user.titipan.titipan', compact('titips'));
    }



    public function create($id)
    {
        $trip = TripInternational::where('id', $id)->first();

        // dd($trip);

         return view('homepage.trip.titip.form_barang', compact('trip'));
    }

    public function store(Request $request)
    {
        
        // dd($request->all());
        // dd(Auth::user()->id);
       $validate = $this->validate($request, [

            
            'gambar_barang' => 'required',
            'nama_barang' => 'required',
            'berat_barang' => 'required|numeric',
            'pajak' => 'required',
            'deskripsi_barang' => 'required',


        ]);
    
        $gambar = $request->file('gambar_barang')->store('gambar_barang');

           TitipBarang::create([

            'user_id' => Auth::user()->id,
            'TripInternational_id' => $request->trip_id, 
            'gambar_barang' => $gambar,
            'nama_barang' => $request->nama_barang,
            'pajak' => $request->pajak,
            'harga' => $request->harga_barang,
            'berat_barang' => $request->berat_barang,
            'deskripsi_barang' => $request->deskripsi_barang
        ]);

           $trip = TripInternational::where('id', $request->trip_id)->first();

           $user = User::where('id', $trip->user_id)->first();

           session()->flush('success', 'Titipan berhasil dibuat');

       
        return redirect()->route('trip.profil', [$user->id, $user->username]);
       
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
