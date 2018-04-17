<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upp extends Model
{
    //
    public $timestamps=false;

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function kuesioner(){
    	return $this->hasMany('App\Kuesioner');
    }

    public function provinsi(){
    	return $this->belongsTo('App\Provinsi');
    }
}
