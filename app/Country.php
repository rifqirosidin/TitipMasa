<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    protected $fillable = [
        'img', 'code', 'name'
    ];

//    protected $primaryKey = 'name';

    public function TripInternational()
    {
        return $this->hasMany('App\TripInternational', 'lokasi_destinasi', 'name');
    }
}
