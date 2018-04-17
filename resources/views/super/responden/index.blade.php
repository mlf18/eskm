@extends('layouts.master.main')
@section('content')    
    <h2>Kabupaten</h2>
    <a href="{{ url('responden/tambah')}}" class="btn btn-primary" style="margin-bottom: 20px;">Tambah</a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Pekerjaan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($r as $rs)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$rs->nama}}</td>
                    <td>{{$rs->pekerjaan}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection