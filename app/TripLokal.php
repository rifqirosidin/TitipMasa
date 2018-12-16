<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TripLokal extends Model
{
    protected $fillable = [
        'user_id','lokasi_dari', 'lokasi_destinasi', 'tgl_berangkat', 'tgl_pulang', 'lokasi_pulang'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function kota()
    {
        return $this->belongsTo('App\Kota', 'lokasi_destinasi');
    }

    public function TitipBarang()
    {
        return $this->hasMany('App\TitipBarang', 'TripInternational_id', 'id');
    }
}
