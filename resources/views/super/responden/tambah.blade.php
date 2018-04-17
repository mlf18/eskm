@extends('layouts.master.main2')
@section('content')
{!! Form::model($r,['route' => 'responden.store','method'=>'POST']) !!}
{{Form::token()}}
    //
    @include('super.responden._form',['submit'=>'Tambah'])
{!! Form::close() !!}
@endsection