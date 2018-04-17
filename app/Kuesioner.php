<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuesioner extends Model
{
    //
    public $timestamps=false;

    public function upp(){
    	return $this->belongsTo('App\Upp');
    }
    public function jawaban(){
    	return $this->hasMany('App\Jawaban');
    }
    public function unsur(){
    	return $this->belongsTo('App\Unsur');
    }

    public function mutuConvert($nilai){
        switch ($nilai) {
            case $nilai>24 && $nilai<43.76:
                return 'D';
                break;
            case $nilai>=43.76 && $nilai<62.5:
                return 'C';
                break;
            case $nilai>=62.5 && $nilai<81.25:
                return 'B';
                break;
            case $nilai>=81.25:
                return 'A';
                break;
            default:
                return 'D';
                break;
        }
    }
}
