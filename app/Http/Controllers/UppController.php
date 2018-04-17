<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Upp;
use App\Provinsi;
use App\Kabupaten;
use App\Opdprovinsi;
use App\Opdkabupaten;
use App\Responden;
use App\Kuesioner;
use App\Jawaban;
use App\Unsur;
use Auth;
use DB;
class UppController extends Controller
{
    //
    public function index(){
    	return view('upp.index.index');
    }
    public function profil(){
    	$user=Auth::user();
    	$k=$user->upp;
    	return view('upp.profil.profil',compact('user','k'));
    }
    public function storeProfil(Request $request){
        $user = Auth::user();
        $user->name=$request->input('username');
        $user->email=$request->input('email');
        $user->password=bcrypt($request->input('password'));
        if($user->save()){
            $k=$user->upp;
            $k->nama=$request->input('nama');
            $k->user_id=$user->id;
            $k->save();
            $kategori='success';
            $pesan="Tersimpan";
        }else{
            $kategori='error';
            $pesan="Gagal";
        }
        return redirect(route('upp.upp.index'))->with($kategori,$pesan);
    }

    public function kuesioner(){
        $kuesioner=Auth::user()->upp->kuesioner;
        $i=1;
        $id=Auth::user()->upp->id;
        return view('upp.kuesioner.index',compact('kuesioner','i','id'));
    }

    public function previewkuesioner($id){
        $kuesioner=Upp::find($id)->kuesioner;
        $i=0;
        $a='a';
        $unsur=0;
        $no=1;
        $kabupaten=Kabupaten::all()->pluck('nama','id');
        $preview=true;
        return view('upp.kuesioner.preview',compact('kuesioner','i','preview','kabupaten','a','unsur','no'));
    }
    public function printkuesioner($id){
        $kuesioner=Upp::find($id)->kuesioner;
        $i=0;
        $a='a';
        $unsur=0;
        $no=1;
        $kabupaten=Kabupaten::all()->pluck('nama','id');
        $preview=true;
        return view('kuesprint',compact('kuesioner','i','preview','kabupaten','a','unsur','no'));
    }

    public function jawabkuesioner($id){
        $kuesioner=Upp::find($id)->kuesioner;
        $i=1;
        $kabupaten=Kabupaten::all()->pluck('nama','id');
        $preview=false;
        $i=0;
        $a='a';
        $unsur=0;
        $no=1;
        return view('upp.kuesioner.preview',compact('kuesioner','i','preview','kabupaten','a','unsur','no'));
    }
    public function jawabStore(Request $request){
        $responden=new Responden();
        $responden->nip=$request->input('nik');
        $responden->nama=$request->input('nama');
        $responden->kabupaten=$request->input('kabupaten');
        $responden->umur=$request->input('umur');
        $responden->pendidikan=$request->input('pendidikan');
        $responden->pekerjaan=$request->input('pekerjaan');
        $responden->save();
        // return($request->input('kues'));
        foreach ($request->input('kues') as $hsl){
            $jawab = new Jawaban();
            $jawab->responden_id=$responden->id;
            $jawab->kuesioner_id=$hsl["kuesioner_id"];
            $jawab->kinerja=$hsl["kinerja"];
            $jawab->kepentingan=$hsl["kepentingan"];
            $jawab->save();
        }
        // $jawab=Jawaban::all();
        $kuesioner=Auth::user()->upp->kuesioner;
        $i=1;
        $id=Auth::user()->upp->id;
        return view('upp.kuesioner.index',compact('kuesioner','i','id'));
    }

    //
    public function reportkuesioner(){
    	$id=Auth::user()->upp->id;
        // $kuesioner=Kuesioner::all();
        // $i=1;
        // return view('super.report.kuesioner.index',compact('kuesioner','i','id'));
        $uns=array();
        $unsur=Unsur::where('id','<',99)->get();
        foreach ($unsur as $u) {
            # code...
            $uns[$u->id]["kinerja"][1]=0;
            $uns[$u->id]["kinerja"][2]=0;
            $uns[$u->id]["kinerja"][3]=0;
            $uns[$u->id]["kinerja"][4]=0;
            $uns[$u->id]["kepentingan"][1]=0;
            $uns[$u->id]["kepentingan"][2]=0;
            $uns[$u->id]["kepentingan"][3]=0;
            $uns[$u->id]["kepentingan"][4]=0;
        }
        $rata["jumlah"]["kinerja"]=0;
        $rata["jumlah"]["kepentingan"]=0;
        $lap=Kuesioner::where('upp_id','=',$id)->get();
        $upp=Upp::find($id);
        //mencari jumlah
        foreach ($lap as $v) {
            foreach ($v->jawaban as $j) {
                $uns[$v->unsur->id]["kinerja"][$j->kinerja]++;
                $uns[$v->unsur->id]["kepentingan"][$j->kepentingan]++;
            }
        }
        // return ($uns[1]["kinerja"]);
        //mencari rata
        foreach ($unsur as $u){
            $k=Kuesioner::where('upp_id','=',$id)->where('unsur_id','=',$u->id)->get();
            $jpu=$k->count();
            $jpu=$jpu > 0 ? $jpu:1;
            $j=DB::table('kuesioners')
                ->join('jawabans','jawabans.kuesioner_id','=','kuesioners.id')
                ->where('upp_id','=',$id)
                ->distinct()
                ->get(['responden_id'])->count();
            $j=$j > 0 ? $j:1;
            $rata[$u->unsur]["kinerja"]["nrr"]=((($uns[$u->id]["kinerja"][1]) + 
                ($uns[$u->id]["kinerja"][2] * 2) + 
                ($uns[$u->id]["kinerja"][3] * 3) + 
                ($uns[$u->id]["kinerja"][4]*4))/$jpu)/$j;
            $rata[$u->unsur]["kinerja"]["konversi"]=$rata[$u->unsur]["kinerja"]["nrr"]*25;
            $rata[$u->unsur]["kinerja"]["mutu"]=$this->mutuConvert($rata[$u->unsur]["kinerja"]["konversi"]);
            $rata[$u->unsur]["kinerja"]["unit"]=$this->mutuKinerja($rata[$u->unsur]["kinerja"]["konversi"]);

            $rata[$u->unsur]["kepentingan"]["nrr"]=((($uns[$u->id]["kepentingan"][1]) + 
                ($uns[$u->id]["kepentingan"][2] * 2) + 
                ($uns[$u->id]["kepentingan"][3] * 3) + 
                ($uns[$u->id]["kepentingan"][4]*4))/$jpu)/$j;
            $rata[$u->unsur]["kepentingan"]["konversi"]=$rata[$u->unsur]["kepentingan"]["nrr"]*25;
            $rata[$u->unsur]["kepentingan"]["mutu"]=$this->mutuConvert($rata[$u->unsur]["kepentingan"]["konversi"]);
            $rata[$u->unsur]["kepentingan"]["unit"]=$this->mutuKepentingan($rata[$u->unsur]["kepentingan"]["konversi"]);
        }
        $jml["kinerja"]["nrr"]=0;
        $jml["kepentingan"]["nrr"]=0;
        $jml["kinerja"]["konversi"]=0;
        $jml["kepentingan"]["konversi"]=0;
        foreach ($unsur as $u){
            $jml["kinerja"]["nrr"]+=$rata[$u->unsur]["kinerja"]["nrr"];
            $jml["kepentingan"]["nrr"]+=$rata[$u->unsur]["kepentingan"]["nrr"];
            $jml["kinerja"]["konversi"]+=$rata[$u->unsur]["kinerja"]["konversi"];
            $jml["kepentingan"]["konversi"]+=$rata[$u->unsur]["kepentingan"]["konversi"];
        }
        $lap=Kuesioner::where('upp_id','=',$id)->distinct()->get(["unsur_id"])->count();
        $lap = $lap >0 ? $lap : 1;
        $jml["kinerja"]["ikm"]=$jml["kinerja"]["nrr"]/$lap;
        $jml["kepentingan"]["ikm"]=$jml["kepentingan"]["nrr"]/$lap;
        $i=1;
        return view("upp.report.laporan.index",compact('uns','rata','unsur','jml','i','upp'));
    }
    public function reportlaporan(){
        $kuesioner=Kuesioner::all();
        $i=1;
        return view('super.report.laporan.index',compact('kuesioner','i','id'));
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

    public function mutuKinerja($nilai){
        switch ($nilai) {
            case $nilai>24 && $nilai<43.76:
                return 'Buruk';
                break;
            case $nilai>=43.76 && $nilai<62.5:
                return 'Cukup';
                break;
            case $nilai>=62.5 && $nilai<81.25:
                return 'Baik';
                break;
            case $nilai>=81.25:
                return 'Sangat Baik';
                break;
            default:
                return 'Buruk';
                break;
        }
    }

    public function mutuKepentingan($nilai){
        switch ($nilai) {
            case $nilai>24 && $nilai<43.76:
                return 'Tidak Penting';
                break;
            case $nilai>=43.76 && $nilai<62.5:
                return 'Kurang Penting';
                break;
            case $nilai>=62.5 && $nilai<81.25:
                return 'Penting';
                break;
            case $nilai>=81.25:
                return 'Sangat Penting';
                break;
            default:
                return 'Tidak Penting';
                break;
        }
    }
}
