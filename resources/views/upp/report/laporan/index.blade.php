@extends('layouts.master.upp')
@section('content')
<h3>{{$upp->nama}}</h3>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href="#" id="persyaratan"><span class="info-box-icon bg-navy"><img class="fa" src="{{url('img/icon/persyaratan.jpg')}}" height="60%"></img></span></a>

            <div class="info-box-content">
              <span class="info-box-text">Persyaratan</span>
              <span class="info-box-number"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href="#" id="prosedur"><span class="info-box-icon"><img class="ion" src="{{url('img/icon/prosedur.jpg')}}" height="60%"></img></span></a>

            <div class="info-box-content">
              <span class="info-box-text">Prosedur</span>
              <span class="info-box-number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href="#" id="waktu"><span class="info-box-icon"><img class="ion" src="{{url('img/icon/waktu.jpg')}}" height="60%"></img></span></a>

            <div class="info-box-content">
              <span class="info-box-text">Waktu Pelayanan</span>
              <span class="info-box-number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href="#" id="produk"><span class="info-box-icon"><img src="{{url('img/icon/produk.jpg')}}" height="60%"></img></span></a>

            <div class="info-box-content">
              <span class="info-box-text">Produk Spesifikasi &amp; Jenis <br> Pelayanan</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href="#" id="kompetensi"><span class="info-box-icon"><img src="{{url('img/icon/kompetensi.jpg')}}" height="60%"></img></span></a>

            <div class="info-box-content">
              <span class="info-box-text">Kompetensi Pelaksana</span>
              <span class="info-box-number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href="#" id="sikap"><span class="info-box-icon"><img src="{{url('img/icon/perilaku.jpg')}}" height="60%"></img></span></a>

            <div class="info-box-content">
              <span class="info-box-text">Sikap/Perilaku Pelaksana</span>
              <span class="info-box-number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href="#" id="maklumat"><span class="info-box-icon"><img src="{{url('img/icon/maklumat.jpg')}}" height="60%"></img></span></a>

            <div class="info-box-content">
              <span class="info-box-text">Maklumat Pelayanan</span>
              <span class="info-box-number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href="#" id="penanganan"><span class="info-box-icon"><img src="{{url('img/icon/penanganan.jpg')}}" height="60%"></img></span></a>

            <div class="info-box-content">
              <span class="info-box-text">Penanganan Pengaduan, Saran <br>dan Masukan</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href="#" id="sarana"><span class="info-box-icon"><img src="{{url('img/icon/biaya.jpg')}}" height="60%"></img></span></a>

            <div class="info-box-content">
              <span class="info-box-text">Sarana &amp; Prasarana</span>
              <span class="info-box-number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
      </div>
      <section class="content" id="grafik">

      <div class="row">
        <div class="col-md-12">
          @foreach($unsur as $u)
          <div id="{{'unsur'.$u->id}}">
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
        <div class="clearfix"></div>
          </div>
        @endforeach
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
    </section>
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
@endsection