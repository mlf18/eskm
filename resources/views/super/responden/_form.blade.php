<h2>{{$submit}} Responden/h2>
<div class="form-group">
	{!! Form::label('nik', 'NIK') !!}
	{!! Form::text('nik', null, ['class'=>'form-control','id'=>'nik']) !!}
</div>
<div class="form-group">
	{!! Form::label('kabupaten', 'Kabupaten') !!}
	{!! Form::select('kabupaten', ['L' => 'Large', 'S' => 'Small'], 'S',['class'=>'form-control']); !!}
</div>
<div class="form-group">
	{!! Form::label('umur', 'Umur') !!}
	{!! Form::number('umur', null, ['class'=>'form-control','id'=>'umur']) !!}
</div>
<!-- <div class="form-group"> -->
	<div class="radio">
		{!! Form::label('jk', 'Jenis Kelamin') !!}
		{!! Form::radio('jk','laki-laki',true); !!}Laki Laki
		{!! Form::radio('jk','perempuan'); !!}Perempuan
	</div>
<!-- </div> -->
<div class="form-group">
	{!! Form::label('pendidikan', 'Pendidikan') !!}
	{!! Form::select('pendidikan', ['SD' => 'SD', 'SMP' => 'Smp'], 'SD',['class'=>'form-control']); !!}
</div>
<div class="form-group">
	{!! Form::label('pekerjaan', 'Pekerjaan') !!}
	{!! Form::select('pekerjaan', ['swasta' => 'Swasta', 'PNS' => 'PNS'], 'S',['class'=>'form-control']); !!}
</div>
<div class="form-group">
	{!! Form::submit('Simpan',['class'=>'btn btn-primary']) !!}
</div>