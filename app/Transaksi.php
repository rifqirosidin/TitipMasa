<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
    	'nama', 'alamat', 'bukti_pembayaran', 'user_id'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
