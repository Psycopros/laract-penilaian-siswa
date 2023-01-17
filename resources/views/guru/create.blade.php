@extends('main.layout')
@section('content')

    <center>

        <br>
        <h2>Tambah Data Guru</h2>

        <form action="/guru/store" method="Post">
        @csrf
        <table width="50%">
            <tr>
                <td width="25%">Nip</td>
                <td width="25%"><input type="number" name="nip"></td>
            </tr>

            <tr>
                <td width="25%">Nama Guru</td>
                <td width="25%"><input type="text" name="nama_guru"></td>
            </tr>

            <tr>
                <td width="25%">Jenis Kelamin</td>
                <td width="25%">
                    <input type="radio" name="JK" value="L">Laki-laki
                    <input type="radio" name="JK" value="P">Perempuan
                </td>
            </tr>

            <tr>
                <td width="25%">Alamat</td>
                <td width="25%"><textarea name="alamat" cols="30" rows="5"></textarea></td>
            </tr>

            <tr>
                <td width="25%">password</td>
                <td width="25%"><input type="password" name="password"></td>
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