@extends('kabupaten.layouts.app')
@section('content')
@section('title')
    Selamat Datang {{Auth::user()->kabupaten->nama}}
@endsection
