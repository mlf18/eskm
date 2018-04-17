@extends('layouts.master.main')
@section('content')    
    <h2>UPP</h2>
    
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users->upp as $upp)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$upp->nama}}</td>
                    <td>
                        <a href="{{route('report.kuesioner.index',['id'=>$upp->id])}}" class="btn btn-info" data-toggle="tooltip" title="Lihat Kuesioner" style="color:black;"><span class="fa fa-eye"></span> Lihat Laporan</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection