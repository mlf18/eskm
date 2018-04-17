@extends('layouts.master.main2')
@section('content')
{!! Form::model($user,['route' => ['opd.update',$user->id],'method'=>'PUT']) !!}
{{Form::token()}}
    @include('super.opd._form',['submit'=>'Edit'])
{!! Form::close() !!}
@endsection