@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA Jurusan</h2>
            <a href="/jurusan/create" class="button-primary">Tambah Data</a>
            <table cellpading="10">
                <tr>
                    <th>NO</th>
                    <th>Jurusan</th>
                    <th>Action</th>
                </tr>

                @foreach ($jurusan as $j)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$j->nama_jurusan}}</td>
                    <td>
                        <a href="/jurusan/edit/{{$j->id}}" class="button-warning">Edit</a>
                        <a href="/jurusan/destroy/{{$j->id}}" class="button-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a>
                    </td>

                </tr>
                @endforeach

            </table>
        </b>
    </center>
@endsection