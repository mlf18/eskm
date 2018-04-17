<h2>{{$submit}} Kuesioner</h2>
<div class="form-group">
	<select name="unsur" id="unsur" class="form-control">
		@foreach($unsur as $u)
			<option value="{{$u->id}}">{{$u->unsur}}</option>
		@endforeach
	</select>
</div>
<div class="form-group">
	{!!Form::number('jum',null,['class'=>'form-control','placeholder'=>'Jumlah Kuesioner','id'=>'jum'])!!}
</div>
<div class="form-group">
	{!! Form::button('Tambah',['class'=>'btn','id'=>'btnJum']) !!}
</div>
<div id="hasil"></div>
<div class="form-group">
	{!! Form::submit('Simpan',['class'=>'btn btn-primary']) !!}
</div>