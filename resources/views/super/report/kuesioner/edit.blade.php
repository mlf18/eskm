@extends('layouts.master.main2')
@section('content')
{!! Form::model($kuesioner,['route' => ['kuesioner.update',$kuesioner->id],'method'=>'PUT']) !!}
{{Form::token()}}
    //
    <h4>{{$kuesioner->unsur->unsur}}</h4>
    <div class="form-group">
	    {!! Form::label('pertanyaan','Pertanyaan') !!}
	    {!! Form::text('pertanyaan',$kuesioner->pertanyaan,['class'=>'form-control']) !!}
	</div>
	{!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!} 
	<a href="{{route('kuesioner.index',['id'=>$kuesioner->upp->id])}}" class="btn btn-default">Kembali</a>
{!! Form::close() !!}
@endsection