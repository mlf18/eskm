<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateKues extends Model
{
    //
    public $timestamps=false;
    public function unsur(){
    	return $this->belongsTo('App\Unsur');
    }
}
