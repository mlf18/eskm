<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unsur extends Model
{
    //
    public $timestamps=false;

    public function kuesioner(){
    	return $this->hasMany('App\Kuesioner');
    }

    public function templatekues(){
    	return $this->hasOne('App\TemplateKues');
    }

    public function kinerja($id,$type,$i){
    	$out='';
        if($type!='form'){
            switch ($id) {
                case '1':
                    $out="<p>a. Tidak Mudah</p>
                    <p>b. Kurang Mudah</p>
                    <p>c. Mudah</p>
                    <p>d. Sangat Mudah</p>";
                    break;
                case '2':
                    $out="<p>a. Tidak Mudah</p>
                    <p>b. Kurang Mudah</p>
                    <p>c. Mudah</p>
                    <p>d. Sangat Mudah</p>";
                    break;
                case '3':
                    $out="
                    <p>a. Tidak cepat/terlalu lama</p>
                    <p>b. Kurang cepat/cukup lama</p>
                    <p>c. Cepat</p>
                    <p>d. Sangat cepat</p>
                    ";
                    break;  
                case '4':
                    $out="
                    <p>a. Gratis</p>
                    <p>b. Membayar?</p>
                    ";
                    break;  
                case '5':
                    $out="
                    <p>a. Sangat kurang</p>
                    <p>b. Kurang</p>
                    <p>c. Sudah lengkap namun perlu dikembangkan</p>
                    <p>d. Sudah sangat lengkap</p>
                    ";
                    break;  
                case '6':
                    $out="
                    <p>a. Tidak kompeten</p>
                    <p>b. Kurang kompeten</p>
                    <p>c. Kompeten</p>
                    <p>d. Sangat kompeten</p>
                    ";
                    break;  
                case '7':
                    $out="
                    <p>a. Tidak sopan/ramah</p>
                    <p>b. Kurang sopan/ramah</p>
                    <p>c. Sopan dan ramah</p>
                    <p>d. Sangat sopan/ramah</p>
                    ";
                    break;  
                case '8':
                    $out="
                    <p>a. Tidak ditanggapi dan tidak ditindaklanjuti</p>
                    <p>b. Kurang ditanggapi dan kurang ditindaklanjuti</p>
                    <p>c. Ditanggapi dan ditindaklanjuti</p>
                    <p>d. Selalu ditanggapi dan ditindaklanjuti</p>
                    ";
                    break;  
                case '9':
                    $out="
                    <p>a. Tidak memadahi</p>
                    <p>b. Kurang memadahi</p>
                    <p>c. Memadai</p>
                    <p>d. Sangat memadahi</p>
                    ";
                    break;  
                default:
                    # code...
                    break;
            }
            return $out;
        }else{
            switch ($id) {
            case '1':
                $out="
                <p><input type='radio' name='kues[$i][kinerja]' value='1' checked/> a. Tidak Mudah</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='2'/> b. Kurang Mudah</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='3'/> c. Mudah</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='4'/> d. Sangat Mudah</p>";
                break;
            case '2':
                $out="
                <p><input type='radio' name='kues[$i][kinerja]' value='1' checked/> a. Tidak Mudah</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='2'/> b. Kurang Mudah</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='3'/> c. Mudah</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='4'/> d. Sangat Mudah</p>";
                break;
            case '3':
                $out="
                <p><input type='radio' name='kues[$i][kinerja]' value='1' checked/> a. Tidak cepat/terlalu lama</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='2'/> b. Kurang cepat/cukup lama</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='3'/> c. Cepat</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='4'/> d. Sangat cepat</p>
                ";
                break;  
            case '4':
                $out="
                <p><input type='radio' name='kues[$i][kinerja]' value='1' checked/> a. Gratis</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='2'/> b. Membayar?</p>
                ";
                break;  
            case '5':
                $out="
                <p><input type='radio' name='kues[$i][kinerja]' value='1' checked/> a. Sangat kurang</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='2'/> b. Kurang</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='3'/> c. Sudah lengkap namun perlu dikembangkan</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='4'/> d. Sudah sangat lengkap</p>
                ";
                break;  
            case '6':
                $out="
                <p><input type='radio' name='kues[$i][kinerja]' value='1' checked/> a. Tidak kompeten</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='2'/> b. Kurang kompeten</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='3'/> c. Kompeten</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='4'/> d. Sangat kompeten</p>
                ";
                break;  
            case '7':
                $out="
                <p><input type='radio' name='kues[$i][kinerja]' value='1' checked/> a. Tidak sopan/ramah</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='2'/> b. Kurang sopan/ramah</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='3'/> c. Sopan dan ramah</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='4'/> d. Sangat sopan/ramah</p>
                ";
                break;  
            case '8':
                $out="
                <p><input type='radio' name='kues[$i][kinerja]' value='1' checked/> a. Tidak ditanggapi dan tidak ditindaklanjuti</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='2'/> b. Kurang ditanggapi dan kurang ditindaklanjuti</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='3'/> c. Ditanggapi dan ditindaklanjuti</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='4'/> d. Selalu ditanggapi dan ditindaklanjuti</p>
                ";
                break;  
            case '9':
                $out="
                <p><input type='radio' name='kues[$i][kinerja]' value='1' checked/> a. Tidak memadahi</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='2'/> b. Kurang memadahi</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='3'/> c. Memadai</p>
                <p><input type='radio' name='kues[$i][kinerja]' value='4'/> d. Sangat memadahi</p>
                ";
                break;  
            default:
                # code...
                break;
        }
        return $out;
    }
        }
    	
}
