<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opdprovinsi extends Model
{
    //
    public $timestamps=false;

    public function provinsi(){
    	return $this->belongsTo('App\Provinsi');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
