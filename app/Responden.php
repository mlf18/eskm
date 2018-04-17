<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responden extends Model
{
    //
    public $timestamps=false;

    public function jawaban(){
    	return $this->hasMany('App\Jawaban');
    }
}
