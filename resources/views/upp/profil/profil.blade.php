@extends('layouts.master.upp')
@section('content')
{!! Form::model($user,['route' => ['upp.upp.profil.store'],'method'=>'PUT']) !!}
{{Form::token()}}
    <!-- // -->
<h2>Profil</h2>
<div class="form-group">
	{!! Form::label('nama', 'Nama') !!}
	{!! Form::text('nama', $k->nama, ['class'=>'form-control','id'=>'nama']) !!}
</div>
<div class="form-group">
	{!! Form::label('username', 'Username') !!}
	{!! Form::text('username', $user->name, ['class'=>'form-control','id'=>'username']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	{!! Form::email('email', $user->email, ['class'=>'form-control','id'=>'email']) !!}
</div>
<div class="form-group">
	{!! Form::label('password', 'Password') !!}
	<!-- Form::input('password', 'name', 'value') -->
	{!! Form::password('password',['class'=>'form-control','id'=>'password']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Simpan',['class'=>'btn btn-primary']) !!}
	<!-- <button type="button" class="btn btn-primary">Simpan</button> -->
</div>
{!! Form::close() !!}
@endsection