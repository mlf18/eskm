@extends('layouts.master.main2')
@section('content')
{!! Form::model($user,['route' => 'upp.store','method'=>'POST']) !!}
{{Form::token()}}
    //
    @include('super.upp._form',['submit'=>'Tambah'])
{!! Form::close() !!}
@endsection