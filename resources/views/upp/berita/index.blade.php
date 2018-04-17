@extends('layouts.master.main')
@section('content')


<section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="">
          <div class="info-box">
      <div class="box-body">
              

    {!! Form::open(['url'=>'berita/store','class'=>'form-horizontal']) !!}
    <div class="form-gorup">
      {!! Form::label('judul', 'Judul Berita', ['class'=>'control-label col-md-2']) !!}
      <div class="col-md-10">
        {!! Form::text('judul', null, ['class'=>'form-control']) !!}
        {!! $errors->has('judul')?$errors->first('judul'):'' !!}
      </div>
    </div>
    <br>
    <br>
    <div class="form-gorup">
      {!! Form::label('kategori', 'Kategori', ['class'=>'control-label col-md-2']) !!}
      <div class="col-md-10">
        {!! Form::text('kategori', null, ['class'=>'form-control']) !!}
        {!! $errors->has('kategori')?$errors->first('kategori'):'' !!}
      </div>
    </div>
    <br>
    <br>
    <div class="form-gorup" style="margin-bottom: 14px;">
      {!! Form::label('berita', 'Berita', ['class'=>'control-label col-md-2']) !!}
      <div class="col-md-10">
        {!! Form::textArea('berita', null, ['class'=>'form-control']) !!}
        {!! $errors->has('berita')?$errors->first('berita'):'' !!}
      </div>
    </div>
    
    <br>
    <br>


    <br>
    <br>

    <div class="form-gorup">
      <div class="col-md-offset-2 col-md-10">
        <input type="submit" value="save" class="btn btn-primary" style="margin-top: 14px;">
      </div>
    </div>
  {!! Form::close() !!}
      </div>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>





@stop