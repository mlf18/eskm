@extends('layouts.master.main2')
@section('content')
{!! Form::model($user,['route' => ['upp.update',$user->id],'method'=>'PUT']) !!}
{{Form::token()}}
    //
    @include('super.upp._form',['submit'=>'Edit'])
{!! Form::close() !!}
@endsection