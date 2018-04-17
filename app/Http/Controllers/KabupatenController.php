<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kabupaten;


class KabupatenController extends Controller
{
    public function index()
    {
         $kabupatens = Kabupaten::all();

        return view('layouts.kabupaten.index', compact('kabupatens'));
    }
}
