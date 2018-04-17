@extends('layouts.master.main')
@section('content')
<h3>Kuesioner {{$kuesioner->first()->upp->nama}}</h3>
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
<?php $i=0;?>
	@foreach($kuesioner as $k)
		<div class="form-group">
			<input type="hidden" name="kues[{{$i}}][kuesioner_id]" value="{{$k->id}}">
			<label for="kues[]">{{$k->pertanyaan}}</label>
			<div class="row">
				<div class="col-md-6">
					<div class="col-md-6">
						<h4>Penilaian Kinerja</h4>
						<?php echo $k->unsur->kinerja($k->unsur->id);?>		
					</div>
					<div class="col-md-6">
						<h4>Tingkat Kepentingan</h4>
						<p>a. Tidak Penting</p>
						<p>b.Kurang Penting</p>
						<p>c. Penting</p>
						<p>d. Sangat Penting</p>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-6">
					<div class="col-md-6">
						<select name="kues[{{$i}}][kinerja]" class="form-control">
							<option value="1">a</option>
							<option value="2">b</option>
							@if($k->unsur->id!=4)
							<option value="3">c</option>
							<option value="4">d</option>
							@endif
						</select>
					</div>
					<div class="col-md-6">
						<select name="kues[{{$i}}][kepentingan]" class="form-control">
							<option value="1">a</option>
							<option value="2">b</option>
							<option value="3">c</option>
							<option value="4">d</option>
						</select>
					</div>
				</div>
			</div>
			<!-- <input type="text" name="kues[]" class="form-control"> -->
		</div>
		<?php $i++;?>
	@endforeach
	@if($preview != true)
	<div class="form-group">
		{!! Form::submit('Simpan',['class'=>'btn btn-primary']) !!}
	</div>
	@endif

{!! Form::close() !!}
@endsection