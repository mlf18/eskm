<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
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
class SuperController extends Controller
{

    //profil

    public function profil(){
        $user=Auth::user();
        $k=Auth::user()->provinsi->nama;
        return view('super.profil.profil',compact('user','k'));
    }
    public function storeProfil(Request $request){
        $user = Auth::user();
        $user->name=$request->input('username');
        $user->email=$request->input('email');
        $user->password=bcrypt($request->input('password'));
        if($user->save()){
            $k=$user->provinsi;
            $k->nama=$request->input('nama');
            $k->user_id=$user->id;
            $k->save();
            $kategori='success';
            $pesan="Tersimpan";
        }else{
            $kategori='error';
            $pesan="Gagal";
        }
        return redirect(route('home'))->with($kategori,$pesan);
    }
    //Kabupaten CRUD

    public function kabupaten(){
        $user=User::where('kategori','kabupaten')->get();
        $i=1;
    	return view('super.kabupaten.index',compact('user','i'));
    }

    public function tambah_kabupaten(){
    	$user= new User();
        $k='';
    	return view('super.kabupaten.tambah',compact('user','k'));
    }

    public function storeKabupaten(Request $request){
    	$user = new User();
    	$user->name=$request->input('username');
    	$user->email=$request->input('email');
    	$user->kategori='kabupaten';
    	$user->password=bcrypt($request->input('password'));
    	if($user->save()){
            $k=new Kabupaten();
            $k->nama=$request->input('nama');
            $k->user_id=$user->id;
            $k->provinsi_id=Auth::user()->provinsi->id;
            $k->save();
    		$kategori='success';
    		$pesan="Tersimpan";
    	}else{
    		$kategori='error';
    		$pesan="Gagal";
    	}
    	return redirect(route('kabupaten.tambah'))->with($kategori,$pesan);
    }

    public function edit_kabupaten($id){
    	$user=User::find($id);
        $k=$user->kabupaten->nama;
    	return view('super.kabupaten.edit',compact('user','k'));
    }

    public function updateKabupaten(Request $request,$id){
    	$user=User::find($id);
    	$user->name=$request->input('username');
    	$user->email=$request->input('email');
    	$user->kategori='kabupaten';
    	$user->password=$request->input('password')!=''?bcrypt($request->input('password')):$user->password;
    	if($user->save()){
            $user->kabupaten->nama=$request->input('nama');
            $user->kabupaten->save();
            $kategori='success';
            $pesan="Tersimpan";
        }else{
            $kategori='error';
            $pesan="Gagal";
        }
    	return redirect(route('kabupaten.edit',$id))->with($kategori,$pesan);
    }

    //OPD CRUD
    public function opd(){
      if (Auth::user()->kategori=="provinsi") {
        $user=Auth::user()->provinsi->opdprovinsi;
        $i=1;
        return view('super.opd.index',compact('user','i'));
      }else {
        $user=Auth::user()->kabupaten->opdkabupaten;
        $i=1;
        return view('kabupaten.opd.index',compact('user','i'));
      }
    }

    public function tambah_opd(){
    	$user= new User();
        $opd='';
    	return view('super.opd.tambah',compact('user','opd'));
    }

    public function storeOpd(Request $request){
    	$user = new User();
    	$user->name=$request->input('username');
    	$user->email=$request->input('email');
    	$user->kategori='opd';
    	$user->password=bcrypt($request->input('password'));
    	if($user->save()){
            $opd=new Opdprovinsi();
            $opd->nama=$request->input('nama');
            $opd->user_id=$user->id;
            $opd->provinsi_id=Auth::user()->provinsi->id;
            $opd->save();
            $kategori='success';
            $pesan="Tersimpan";
        }else{
            $kategori='error';
            $pesan="Gagal";
        }
    	return redirect(route('opd.tambah'))->with($kategori,$pesan);
    }

    public function edit_opd($id){
    	$user=User::find($id);
        $opd=$user->opdprovinsi->nama;
    	return view('super.opd.edit',compact('user','opd'));
    }

    public function updateOpd(Request $request,$id){
    	$user=User::find($id);
    	$user->name=$request->input('username');
    	$user->email=$request->input('email');
    	$user->kategori='opd';
    	$user->password=$request->input('password')!=''?bcrypt($request->input('password')):$user->password;
    	if($user->save()){
            $user->opdprovinsi->nama=$request->input('nama');
            $user->opdprovinsi->save();
            $kategori='success';
            $pesan="Tersimpan";
        }else{
            $kategori='error';
            $pesan="Gagal";
        }
    	return redirect(route('opd.edit',$id))->with($kategori,$pesan);
    }

    //UPP CRUD
    public function upp(){
        $users=Auth::user()->provinsi;
        $i=1;
        return view('super.upp.index',compact('users','i'));
    }

    public function tambah_upp(){
        $user= new Upp();
        return view('super.upp.tambah',compact('user'));
    }

    public function storeUpp(Request $request){
        $user = new User();
        $user->name=$request->input('username');
        $user->email=$request->input('email');
        $user->kategori='upp';
        $user->password=bcrypt($request->input('password'));
        if($user->save()){
            $upp=new Upp();
            $upp->nama=$request->input('nama');
            $upp->user_id=$user->id;
            $upp->provinsi_id=Auth::user()->provinsi->id;
            $upp->save();
            $kategori='success';
            $pesan="Tersimpan";
        }else{
            $kategori='error';
            $pesan="Gagal";
        }
        return redirect(route('upp.index'))->with($kategori,$pesan);
    }

    public function edit_upp($id){
        $user=User::find($id);
        // return ($user);
        return view('super.upp.edit',compact('user'));
    }

    public function updateUpp(Request $request,$id){
        $user = User::find($id);
        $user->name=$request->input('username');
        $user->email=$request->input('email');
        $user->kategori='upp';
        $user->password=$request->input('password')!=''?bcrypt($request->input('password')):'';
        if($user->save()){
            $upp=$user->upp;
            $upp->nama=$request->input('nama');
            $upp->user_id=$user->id;
            $upp->provinsi_id=Auth::user()->provinsi->id;
            $upp->save();
            $kategori='success';
            $pesan="Tersimpan";
        }else{
            $kategori='error';
            $pesan="Gagal";
        }
        return redirect(route('upp.index'))->with($kategori,$pesan);
    }

    //Kuesioner CRUD

    public function kuesioner($id){
        $kuesioner=Upp::find($id)->kuesioner;
        $i=1;
        return view('super.kuesioner.index',compact('kuesioner','i','id'));
    }

    public function tambah_kuesioner($id){
        $kuesioner= new Kuesioner();
        $unsur=Unsur::where('id','<>',99)->get();
        $i=1;
        // return ([$unsur->first()->templatekues->pertanyaan]);
        return view('super.kuesioner.tambah',compact('kuesioner','id','unsur','i'));
    }

    public function storekuesioner(Request $request,$id){
        foreach ($request->input('pertanyaan') as $p) {
            # code...
            foreach ($p['pertanyaan'] as $hsl) {
                # code...
                if($hsl!=''){
                    $k = new Kuesioner();
                    $k->pertanyaan=$hsl;
                    $k->upp_id=$id;
                    $k->kategori=$p['kategori'];
                    $k->unsur_id=$p['unsur_id'];
                    if($k->save()){
                        $kategori='success';
                        $pesan="Tersimpan";
                    }else{
                        $kategori='error';
                        $pesan="Gagal";
                        exit();
                    }
                }
            }
            // print_r($k);
        }
        // exit();die();
        return redirect(route('kuesioner.index',['id'=>$k->upp_id]))->with($kategori,$pesan);
    }

    public function edit_kuesioner($id){
        $kuesioner=Kuesioner::find($id);
        return view('super.kuesioner.edit',compact('kuesioner'));
    }

    public function updatekuesioner(Request $request,$id){
        $k=Kuesioner::find($id);
        $k->pertanyaan=$request->input('pertanyaan');
        if($k->save()){
            $kategori='success';
            $pesan="Tersimpan";
        }else{
            $kategori='error';
            $pesan="Gagal";
        }
        return redirect(route('kuesioner.index',$k->upp->id))->with($kategori,$pesan);
    }

    //Kuesioner CRUDv2

    public function kuesionerv2($id){
        $kuesioner=Upp::find($id)->kuesioner;
        $i=1;
        $unsur=Unsur::all();
        return view('kuesioner.index',compact('kuesioner','i','id','unsur'));
    }

    public function formkues(Request $request){
        $u=Unsur::find($request->input('u'));
        $tem=$u->templatekues["pertanyaan"];
        $out='';
        for($i=0;$i<$request->input('jum');$i++){
            if ($i==0){
                $out=$out."<div class='form-group'><input type='text' name='pertanyaan[pertanyaan][".$i."]' class='form-control' value='".$tem."' /></div>";    
            }else{
                $out=$out."<div class='form-group'><input type='text' name='pertanyaan[pertanyaan][".$i."]' class='form-control' value='' /></div>";    
            }
        }
        return ($out);
    }

    public function tambah_kuesionerv2($id){
        $kuesioner= new Kuesioner();
        $unsur=Unsur::where('id','<>',99)->get();
        $i=1;
        // return ([$unsur->first()->templatekues->pertanyaan]);
        return view('kuesioner.tambah',compact('kuesioner','id','unsur','i'));
    }

    public function storekuesionerv2(Request $request,$id){
        if(count($request->input('pertanyaan'))>0){
            foreach ($request->input('pertanyaan') as $p) {
                # code...
                foreach ($p as $hsl) {
                    # code...
                    if($hsl!=''){
                        $k = new Kuesioner();
                        $k->pertanyaan=$hsl;
                        $k->upp_id=$id;
                        $k->kategori="text";
                        $k->unsur_id=$request->input('unsur');
                        if($k->save()){
                            $kategori='success';
                            $pesan="Tersimpan";
                        }else{
                            $kategori='error';
                            $pesan="Gagal";
                            exit();
                        }
                    }
                }
            }
        }
        return redirect(route('kuesionerv2.index',['id'=>$k->upp_id]))->with($kategori,$pesan);
    }

    public function edit_kuesionerv2($id){
        $kuesioner=Kuesioner::find($id);
        return view('kuesioner.edit',compact('kuesioner'));
    }

    public function updatekuesionerv2(Request $request,$id){
        $k=Kuesioner::find($id);
        $k->pertanyaan=$request->input('pertanyaan');
        if($k->save()){
            $kategori='success';
            $pesan="Tersimpan";
        }else{
            $kategori='error';
            $pesan="Gagal";
        }
        return redirect(route('kuesionerv2.index',$k->upp->id))->with($kategori,$pesan);
    }

    public function previewkuesioner($id){
        $kuesioner=Upp::find($id)->kuesioner;
        $i=0;
        $a='a';
        $unsur=0;
        $no=1;
        $kabupaten=Kabupaten::all()->pluck('nama','id');
        $preview=true;
        return view('super.kuesioner.preview',compact('kuesioner','i','preview','kabupaten','a','unsur','no'));
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

    public function responden(){
        $r=Responden::all();
        $i=1;
        return view('super.responden.index',compact('r','i'));
    }

    public function tambah_responden(){
        $r=new Responden();
        // return ([$responden]);
        return view('super.responden.tambah',compact('r'));
    }

    public function storeresponden(Request $request){
        $r = new Responden();
        $r->pertanyaan=$request->input('pertanyaan');
        $r->upp_id=1;
        if($r->save()){
            $kategori='success';
            $pesan="Tersimpan";
        }else{
            $kategori='error';
            $pesan="Gagal";
        }
        return redirect(route('responden.tambah'))->with($kategori,$pesan);
    }

    public function edit_responden($id){
        $responden=responden::find($id);
        return view('super.responden.edit',compact('responden'));
    }

    public function updateresponden(Request $request,$id){
        $r=Responden::find($id);
        $r->pertanyaan=$request->input('pertanyaan');
        $r->upp_id=1;
        if($r->save()){
            $kategori='success';
            $pesan="Tersimpan";
        }else{
            $kategori='error';
            $pesan="Gagal";
        }
        return redirect(route('responden.edit',$id))->with($kategori,$pesan);
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
        return view('super.kuesioner.preview',compact('kuesioner','i','preview','kabupaten','a','unsur','no'));
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
        return ($jawab);
    }

    public function search()
    {
        return (Input::get('upp'));
        // do things with them...
    }

    public function rekuesioner(){
        $users=Auth::user()->provinsi;
        $i=1;
        return view('super.report.kuesioner.index',compact('users','i'));    
    }

    public function reportkuesioner($id){
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
        return view("super.report.laporan.index",compact('uns','rata','unsur','jml','i','upp'));
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
