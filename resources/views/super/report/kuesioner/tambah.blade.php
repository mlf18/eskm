@extends('layouts.master.main2')
@section('content')
{!! Form::model($kuesioner,['route' => ['kuesioner.store',$id],'method'=>'POST']) !!}
{{Form::token()}}
    //
    @include('super.kuesioner._form',['submit'=>'Tambah'])
{!! Form::close() !!}
@endsection