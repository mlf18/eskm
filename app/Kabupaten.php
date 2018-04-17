<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    //
    public $timestamps=false;

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function provinsi(){
    	return $this->belongsTo('App\Provinsi');
    }
    public function opdkabupaten(){
    	return $this->hasMany('App\Opdkabupaten');
    }
}
