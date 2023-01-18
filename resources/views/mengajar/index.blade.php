@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA Mengajar</h2>
            <a href="/mengajar/create" class="button-primary">Tambah Data</a>
            
            @if (session('success'))
                <p class="text-success">{{session('success')}}</p>
            @endif
            @if (session('erroe'))
                <p class="text-error">{{session('error')}}</p>
            @endif
            
            <table cellpading="10">
                <tr>
                    <th>NO</th>
                    <th>Guru</th>
                    <th>Mata pelajaran</th>
                    <th>Kelas</th>
                    <th>Action</th>
                </tr>

                @foreach ($mengajar as $m)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$m->guru->nama_guru}}</td>
                    <td>{{$m->mapel->nama_mapel}}</td>
                    <td>{{$m->kelas->nama_kelas}}</td>
                    <td>
                        <a href="/mengajar/edit/{{$m->id}}" class="button-warning">Edit</a>
                        <a href="/mengajar/destroy/{{$m->id}}" class="button-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a>
                    </td>

                </tr>
                @endforeach

            </table>
        </b>
    </center>
@endsection