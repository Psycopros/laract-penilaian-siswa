@extends('main.layout')
@section('content')

    <center>

        <br>
        <h2>Tambah Data Siswa</h2>

        <form action="/siswa/store" method="Post">
        @csrf
        <table width="50%">
            <tr>
                <td width="25%">Nis</td>
                <td width="25%"><input type="number" name="nis"></td>
            </tr>

            <tr>
                <td width="25%">Nama siswa</td>
                <td width="25%"><input type="text" name="nama_siswa"></td>
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

            <td width="25%">Kelas</td>
            <td width="25%">
                <select name="kelas_id">
                    @foreach ($kelas as $k)
                        <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
                    @endforeach
                </select>
            </td>

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