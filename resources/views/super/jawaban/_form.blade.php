@extends('layouts.master.main')
@section('content')
{!! Form::open(['route' => 'jawab.store', 'files' => true]) !!}
<h2>Data Responden</h2>
<div class="form-group">
	{!! Form::label('nik', 'NIK') !!}
	{!! Form::text('nik', null, ['class'=>'form-control','id'=>'nik']) !!}
</div>
<div class="form-group">
	{!! Form::label('nama', 'NAMA') !!}
	{!! Form::text('nama', null, ['class'=>'form-control','id'=>'nama']) !!}
</div>
<div class="form-group">
	{!! Form::label('kabupaten', 'Kabupaten') !!}
	{!! Form::select('kabupaten', $kabupaten, null,['class'=>'form-control']); !!}
</div>
<div class="form-group">
	{!! Form::label('umur', 'Umur') !!}
	{!! Form::number('umur', null, ['class'=>'form-control','id'=>'umur']) !!}
</div>
<div class="form-group">
	{!! Form::label('jk', 'Jenis Kelamin') !!}<br/>
		{!! Form::radio('jk','laki-laki',true,['class'=>'minimal']) !!} Laki Laki
		{!! Form::radio('jk','perempuan',false,['class'=>'minimal']) !!} Perempuan
</div>
<div class="form-group">
	{!! Form::label('pendidikan', 'Pendidikan') !!}
	{!! Form::select('pendidikan', ['SD' => 'SD', 'SMP' => 'Smp'], 'SD',['class'=>'form-control']); !!}
</div>
<div class="form-group">
	{!! Form::label('pekerjaan', 'Pekerjaan') !!}
	{!! Form::select('pekerjaan', ['swasta' => 'Swasta', 'PNS' => 'PNS'], 'S',['class'=>'form-control']); !!}
</div>
	@foreach($kuesioner as $k)
	<?php $i=0;?>
	@if($k->kategori == 'dropdown')
		<div class="form-group">
			<input type="hidden" name="kues[{{ $i }}]['id']" value="{{$k->id}}"/>
			<label for="kues[{{ $i }}]['pertanyaan']">{{$k->pertanyaan}}</label>
			<select name="kues[{{$i}}]['pertanyaan']" class="form-control">
				<option value="0">Sangat Baik</option>
				<option value="1">Baik</option>
				<option value="2">Cukup</option>
			</select>
		</div>
	@else
		<div class="form-group">
			<input type="hidden" name="kues[{{ $i }}]['id']" value="{{$k->id}}"/>
			<label for="kues[{{ $i }}]['pertanyaan']">{{$k->pertanyaan}}</label>
			<input type="text" name="kues[{{ $i }}]['pertanyaan']" class="form-control">
		</div>
	@endif
	@endforeach
	<div class="form-group">
	{!! Form::submit('Kirim',['class'=>'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}
@endsection