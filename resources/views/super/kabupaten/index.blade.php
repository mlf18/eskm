@extends('layouts.master.main')
@section('content')    
    <h2>Kabupaten</h2>
    <a href="{{ url('kabupaten/tambah')}}" class="btn btn-primary" style="margin-bottom: 20px;">Tambah</a>
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
                @foreach($user as $u)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$u->kabupaten["nama"]}}</td>
                    <td><a href="{{route('kabupaten.edit',['id'=>$u->id])}}" class="btn btn-primary">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection