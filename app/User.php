<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'foto','slug','name', 'email', 'password','username',
        'phone','alamat','ktp'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profil()
    {
        return $this->hasOne('App\Profile');
    }

    public function TripInternational()
    {
        return $this->hasMany('App\TripInternational');
    }

    public function TitipBarang()
    {
        return $this->hasMany('App\TitipBarang');
    }
}
