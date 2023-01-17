@extends('main.layout')
@section('content')

    <center>

        <br>
        <h2>Edit Data Mata pelajaran</h2>

        <form action="/mapel/update/{{$mapel->id}}" method="Post">
        @csrf
        <table width="50%">
            <tr>
                <td width="25%">Nama Mata Pelajaran</td>
                <td width="25%"><input type="text" name="nama_mapel" value="{{$mapel->nama_mapel}}"></td>
            </tr>

            <tr>
                <td colspan="2">
                    <center><button class="button-primary" type="submit">Simpan</button></center>
                </td>
            </tr>

        </table>
        
        </form>


    </center>
    
@endsection