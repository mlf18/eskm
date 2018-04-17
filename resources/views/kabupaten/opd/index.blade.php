@extends('kabupaten.layouts.app')
@section('breadcrumb')
    @parent
    <li>OPD</li>
@endsection
@section('content')
    <h2>OPD</h2>
    <a href="{{ url('opd/tambah')}}" class="btn btn-primary" style="margin-bottom: 20px;">Tambah</a>
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
                    <td>{{$u->nama}}</td>
                    <td><a href="{{route('opd.edit',['id'=>$u->user->id])}}" class="btn btn-primary">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
