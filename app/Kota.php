<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $fillable = [
        'img', 'code', 'name', 'slug'
    ];

//    protected $primaryKey = 'name';

    public function TripLokal()
    {
        return $this->hasMany('App\TripLokal', 'lokasi_destinasi', 'name');
    }
}
