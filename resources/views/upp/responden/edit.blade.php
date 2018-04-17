@extends('layouts.master.main2')
@section('content')
{!! Form::model($r,['route' => ['responden.update',$r->id],'method'=>'PUT']) !!}
{{Form::token()}}
    //
    @include('super.responden._form',['submit'=>'Edit'])
{!! Form::close() !!}
@endsection