<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TripInternational extends Model
{
    protected $fillable = [
        'user_id','lokasi_dari', 'lokasi_destinasi', 'tgl_berangkat', 'tgl_pulang', 'lokasi_pulang'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function country()
    {
        return $this->belongsTo('App\Country', 'lokasi_destinasi');
    }

    public function TitipBarang()
    {
        return $this->hasMany('App\TitipBarang', 'TripInternational_id', 'id');
    }



}
