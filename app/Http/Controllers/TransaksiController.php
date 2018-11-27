<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
class TransaksiController extends Controller
{
    public function BuktiPembayaran($id)
    {
        $bukti = request()->file('bukti_pembayaran')->store('bukti_pembayaran');
        $validate = $this->validate(request(), [
            'nama' => 'required',
            'bukti_pembayaran' => 'required',
            'alamat' => 'required'

        ]);
       
        Transaksi::create([
        	'nama' => request()->nama,
        	'user_id' => $id,
        	'alamat' => request()->alamat,
        	'bukti_pembayaran' => $bukti
        ]);

        session()->flash('success', 'Transaksi Telah Selesai Silahkan Tunggu Konfirmasi Dari Traveller');

        return redirect()->back();
    }
}
