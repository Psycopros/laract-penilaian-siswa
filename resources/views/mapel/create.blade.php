@extends('main.layout')
@section('content')

    <center>

        <br>
        <h2>Tambah Data Mata Pelajaran</h2>

        <form action="/mapel/store" method="Post">
        @csrf
        <table width="50%">
            <tr>
                <td width="25%">Nama Mata Pelajaran</td>
                <td width="25%"><input type="text" name="nama_mapel"></td>
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