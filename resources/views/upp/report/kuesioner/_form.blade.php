<h2>{{$submit}} Kuesioner</h2>
@foreach($unsur as $u)
<div class="form-group">
	<h4>Unsur {{$i.'. '.$u->unsur}}{{$u->id==99?'(optional)':''}}</h4>
	<label for = "pertanyaan[{{$i-1}}][pertanyaan]">Pertanyaan</label>
	<input type="text" name="pertanyaan[{{$i-1}}][pertanyaan]" class="form-control" value="{{$u->templatekues['pertanyaan']}}" />
	<input type="hidden" name="pertanyaan[{{$i-1}}][kategori]" value="text">
	<input type="hidden" name="pertanyaan[{{$i-1}}][unsur_id]" value="{{$u->id}}">
	<div class="row">
		<div class="col-md-6">
			<div class="col-md-6">
				<h4>Penilaian Kinerja</h4>
				<?php echo $u->kinerja($u->id);?>		
			</div>
			<div class="col-md-6">
				<h4>Tingkat Kepentingan</h4>
				<p>a. Tidak Penting</p>
				<p>b.Kurang Penting</p>
				<p>c. Penting</p>
				<p>d. Sangat Penting</p>
			</div>
		</div>
	</div>
</div>
<?php $i++;?>
@endforeach
<div class="form-group">
	{!! Form::submit('Simpan',['class'=>'btn btn-primary']) !!}
</div>