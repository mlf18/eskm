@extends('layouts.master.main')
@section('content')    
    <h2>Kuesioner</h2>
    <a href="{{ route('kuesionerv2.tambah',['id'=>$id])}}" class="btn btn-primary" style="margin-bottom: 20px;">Tambah</a>
    <a href="{{ route('kuesioner.preview',['id'=>$id])}}" class="btn btn-success" style="margin-bottom: 20px;">Preview</a>
    <a href="{{ route('kuesionerv2.jawab',['id'=>$id])}}" class="btn btn-info" style="margin-bottom: 20px;">Jawab</a>
    <a href="{{ route('kuesionerv2.print',['id'=>$id])}}" class="btn btn-info" style="margin-bottom: 20px;">Print</a>
    <a href="{{ route('upp.index')}}" class="btn btn-default" style="margin-bottom: 20px;">Kembali</a>
    <div class="table-responsive">
        <table class="table table-striped table-sm" id="dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Unsur</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kuesioner as $k)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$k->pertanyaan}}</td>
                    <td>{{$k->unsur->unsur}}</td>
                    <td>
                        <a href="{{route('kuesionerv2.edit',['id'=>$k->id])}}" class="btn btn-primary" data-toggle="tooltip" title="Lihat Kuesioner">Edit</a>
                        <a href="" class="btn btn-danger" data-toggle="tooltip" title="Lihat Kuesioner">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
