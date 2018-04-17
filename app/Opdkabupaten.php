<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opdkabupaten extends Model
{
    //
    public $timestamps=false;

    public function kabupaten(){
    	return $this->belongsTo('App\Kabupaten');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
