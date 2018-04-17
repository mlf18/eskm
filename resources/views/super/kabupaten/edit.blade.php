@extends('layouts.master.main')
@section('content')
{!! Form::model($user,['route' => ['kabupaten.update',$user->id],'method'=>'PUT']) !!}
{{Form::token()}}
    //
    @include('super.kabupaten._form',['submit'=>'Edit'])
{!! Form::close() !!}
@endsection