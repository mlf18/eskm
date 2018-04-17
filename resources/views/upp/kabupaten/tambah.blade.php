@extends('layouts.master.main2')
@section('content')
{!! Form::model($user,['route' => 'kabupaten.store','method'=>'POST']) !!}
{{Form::token()}}
    
    @include('super.kabupaten._form',['submit'=>'Tambah'])
{!! Form::close() !!}
@endsection