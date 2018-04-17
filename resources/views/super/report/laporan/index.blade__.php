@extends('layouts.master.main')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Flot Charts
        <small>preview sample</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Charts</a></li>
        <li class="active">Flot</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" id="grafik">

      <div class="row">
        <div class="col-md-12">
          @foreach($unsur as $u)
        <div class="col-md-6">
          <!-- Bar chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Grafik Unsur {{$u->unsur}} Kinerja</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="{{$u->id}}" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        @endforeach
        <div class="clearfix"></div>
          <!-- /.box -->
          @foreach($unsur as $u)
        <div class="col-md-6">
          <!-- Bar chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Grafik Unsur {{$u->unsur}} Kepentingan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="kepentingan{{$u->id}}" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        @endforeach
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
    </section>
    <select class="form-control tog">
      <option value="1">Grafik</option>
      <option value="2">IKM</option>
    </select>
    <section class="content" id="rata-rata">

      <div class="row">
        <div class="col-md-12">
        <div class="col-md-6">
          <!-- Bar chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Rata - Rata</h3>
            </div>
            <div class="box-body">
              <div class="table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Unsur</th>
                  <th>Nilai IKM</th>
                  <th>Nilai Konversi</th>
                  <th>Mutu Pelayanan</th>
                  <th>Ukuran Kinerja</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($unsur as $u)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$u->unsur}}</td>
                  <td>{{round($rata[$u->unsur]["kinerja"]["nrr"],2)}}</td>
                  <td>{{round($rata[$u->unsur]["kinerja"]["konversi"],2)}}</td>
                  <td>{{$rata[$u->unsur]["kinerja"]["mutu"]}}</td>
                  <td>{{$rata[$u->unsur]["kinerja"]["unit"]}}</td>
                </tr>
                @endforeach
                <tr>
                  <td colspan="2">Jumlah</td>
                  <td>{{round($jml["kinerja"]["nrr"],2)}}</td>
                  <td colspan="3">{{$jml["kinerja"]["konversi"]}}</td>
                </tr>
                <tr>
                  <td colspan="2">Nilai IKM</td>
                  <td>{{round($jml["kinerja"]["ikm"],2)}}</td>
                  <td colspan="3">{{round($jml["kinerja"]["ikm"]*25,2)}}</td>
                </tr>
                </tbody>
              </table>
            </div>
            </div>
        </div>
        <?php $i=1;?>
            <!-- /.box-body-->
          </div>
          <div class="col-md-6">
          <!-- Bar chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Rata - Rata</h3>
            </div>
            <div class="box-body">
              <div class="table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Unsur</th>
                  <th>Nilai IKM</th>
                  <th>Nilai Konversi</th>
                  <th>Mutu Pelayanan</th>
                  <th>Ukuran kepentingan</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($unsur as $u)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$u->unsur}}</td>
                  <td>{{round($rata[$u->unsur]["kepentingan"]["nrr"],2)}}</td>
                  <td>{{round($rata[$u->unsur]["kepentingan"]["konversi"],2)}}</td>
                  <td>{{$rata[$u->unsur]["kepentingan"]["mutu"]}}</td>
                  <td>{{$rata[$u->unsur]["kepentingan"]["unit"]}}</td>
                </tr>
                @endforeach
                <tr>
                  <td colspan="2">Jumlah</td>
                  <td>{{round($jml["kepentingan"]["nrr"],2)}}</td>
                  <td colspan="3">{{$jml["kepentingan"]["konversi"]}}</td>
                </tr>
                <tr>
                  <td colspan="2">Nilai IKM</td>
                  <td>{{round($jml["kepentingan"]["ikm"],2)}}</td>
                  <td colspan="3">{{round($jml["kepentingan"]["ikm"]*25,2)}}</td>
                </tr>
                </tbody>
              </table>
            </div>
            </div>
        </div>
        <?php $i=1;?>
            <!-- /.box-body-->
          </div>
        <!-- /.col -->
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection