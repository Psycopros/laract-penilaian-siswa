@extends('main.layout')
@section('content')

    <center>

        <br>
        <h2>Tambah Data Kelas</h2>

        <form action="/kelas/store" method="Post">
        @csrf
        <table width="50%">
            <tr>
                <td width="25%">Nama Kelas</td>
                <td width="25%"><input type="text" name="nama_kelas"></td>
            </tr>

            <td width="25%">Nama Jurusan</td>
            <td width="25%">
                <select name="jurusan_id">
                    @foreach ($jurusan as $j)
                        <option value="{{$j->id}}">{{$j->nama_jurusan}}</option>
                    @endforeach
                </select>
            </td>

            <tr>
                <td colspan="2">
                    <center><button class="button-primary" type="submit">Simpan</button></center>
                </td>
            </tr>

        </table>
        
        </form>


    </center>
    
@endsection