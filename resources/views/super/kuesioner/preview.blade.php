@extends('layouts.master.main')
@section('content')
@if($kuesioner->count()>0)
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
	@foreach($kuesioner as $k)
		<div class="form-group">
			<input type="hidden" name="kues[{{$i}}][kuesioner_id]" value="{{$k->id}}">
			@if($k->where('unsur_id','=',$k->unsur_id)->where('upp_id','=',$k->upp_id)->count() < 2)
			<h4>{{$no.'. '.$k->unsur->unsur}}</h4>
			<label for="kues[]">{{$k->pertanyaan}}</label>
			<?php $no++;?>
			@else
			@if($unsur != $k->unsur_id)
			<h4>{{$no.'. '.$k->unsur->unsur}}</h4>
			<?php $unsur=$k->unsur_id;?>
			<?php $no++;?>
			@endif
			<label for="kues[]">{{$k->pertanyaan}}</label>
			@endif
			<div class="row">
				<div class="col-md-6">
					<div class="col-md-6">
						<h4>Penilaian Kinerja</h4>
						<?php echo $k->unsur->kinerja($k->unsur->id,'form',$i);?>		
					</div>
					<div class="col-md-6">
						<h4>Tingkat Kepentingan</h4>
						<p><input type="radio" name="kues[{{$i}}][kepentingan]" value="1" checked /> a. Tidak Penting</p>
						<p><input type="radio" name="kues[{{$i}}][kepentingan]" value="2" /> b.Kurang Penting</p>
						<p><input type="radio" name="kues[{{$i}}][kepentingan]" value="3" /> c. Penting</p>
						<p><input type="radio" name="kues[{{$i}}][kepentingan]" value="4" /> d. Sangat Penting</p>
					</div>
				</div>
				<div class="clearfix"></div>
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
@endif
@endsection