<h2>{{$submit}} UPP</h2>
<div class="form-group">
	{!! Form::label('username', 'User Name') !!}
	{!! Form::text('username', $user->name, ['class'=>'form-control','id'=>'username']) !!}
	{!! Form::label('nama', 'Nama') !!}
	{!! Form::text('nama', isset($user->upp->nama)?$user->upp->nama:'', ['class'=>'form-control','id'=>'nama']) !!}
	{!! Form::label('email', 'Email') !!}
	{!! Form::text('email', $user->email, ['class'=>'form-control','id'=>'email']) !!}
	{!! Form::label('password', 'Password') !!}
	{!! Form::password('password', ['class'=>'form-control','id'=>'password']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Simpan',['class'=>'btn btn-primary']) !!}
</div>