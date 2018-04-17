@extends('layouts.master.upp')
@section('content')
{!! Form::model($kuesioner,['route' => ['kuesionerv2.store',$id],'method'=>'POST']) !!}
{{Form::token()}}
    //
    @include('kuesioner._form',['submit'=>'Tambah'])
{!! Form::close() !!}
@endsection