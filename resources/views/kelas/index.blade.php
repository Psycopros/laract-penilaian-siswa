@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA Kelas</h2>
            <a href="/kelas/create" class="button-primary">Tambah Data</a>
            
            @if (session('success'))
                <p class="text-success">{{session('success')}}</p>
            @endif
            @if (session('erroe'))
                <p class="text-error">{{session('error')}}</p>
            @endif
            
            <table cellpading="10">
                <tr>
                    <th>NO</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Action</th>
                </tr>

                @foreach ($kelas as $k)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$k->nama_kelas}}</td>
                    <td>{{$k->jurusan->nama_jurusan}}</td>
                    <td>
                        <a href="/kelas/edit/{{$k->id}}" class="button-warning">Edit</a>
                        <a href="/kelas/destroy/{{$k->id}}" class="button-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a>
                    </td>

                </tr>
                @endforeach

            </table>
        </b>
    </center>
@endsection