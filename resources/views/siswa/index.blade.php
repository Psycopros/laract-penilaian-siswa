@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA Murid</h2>
            <a href="/siswa/create" class="button-primary">Tambah Data</a>
            
            @if (session('success'))
                <p class="text-success">{{session('success')}}</p>
            @endif
            @if (session('erroe'))
                <p class="text-error">{{session('error')}}</p>
            @endif
            
            <table cellpading="10">
                <tr>
                    <th>NO</th>
                    <th>Nis</th>
                    <th>Nama Siswa</th>
                    <th>jenis kelamin</th>
                    <th>Alamat</th>
                    <th>Kelas</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>

                @foreach ($siswa as $s)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$s->nis}}</td>
                    <td>{{$s->nama_siswa}}</td>
                    <td>{{$s->JK == 'L' ? 'laki-laki' : 'perempuan'}}</td>
                    <td>{{$s->alamat}}</td>
                    <td>{{$s->kelas->nama_kelas}}</td>
                    <td>{{$s->password}}</td>
                    <td>
                        <a href="/siswa/edit/{{$s->id}}" class="button-warning">Edit</a>
                        <a href="/siswa/destroy/{{$s->id}}" class="button-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a>
                    </td>

                </tr>
                @endforeach

            </table>
        </b>
    </center>
@endsection