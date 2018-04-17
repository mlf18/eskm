<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('cekkategori');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->kategori == "provinsi") return view('super.index.index');
        elseif(Auth::user()->kategori == "kabupaten") return view('kabupaten.home.index');
        else return Redirect::route('login');
    }

}
