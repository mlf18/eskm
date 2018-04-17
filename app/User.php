<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function provinsi(){
        return $this->hasOne('App\Provinsi');
    }

    public function kabupaten(){
        return $this->hasOne('App\Kabupaten');
    }

    public function upp(){
        return $this->hasOne('App\Upp');
    }

    public function opdprovinsi(){
        return $this->hasOne('App\Opdprovinsi');
    }

    public function opdkabupaten(){
        return $this->hasOne('App\Opdkabupaten');
    }
}
