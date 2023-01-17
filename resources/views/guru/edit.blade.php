@extends('main.layout')
@section('content')

    <center>

        <br>
        <h2>edit Data Guru</h2>

        <form action="/guru/update/{{$guru->id}}" method="Post">
        @csrf
        <table width="50%">
            <tr>
                <td>Nip</td>
                <td><input type="text" name="nip" value="{{$guru->nip}}"></td>
            </tr>

            <tr>
                <td>Nama Guru</td>
                <td><input type="text" name="nama_guru" value="{{$guru->nama_guru}}"></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="JK" value="L" {{$guru->JK == 'L' ? 'checked' : ''}}>Laki-laki
                    <input type="radio" name="JK" value="P" {{$guru->JK == 'P' ? 'checked' : ''}}>Perempuan
                </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="30" rows="5">{{$guru->alamat}}</textarea></td>
            </tr>

            <tr>
                <td>password</td>
                <td><input type="password" name="password" value="{{$guru->password}}"></td>
            </tr>

            <tr>
                <td colspan="2">
                    <center><button class="button-primary" type="submit">Ubah</button></center>
                </td>
            </tr>

        </table>
        
        </form>


    </center>
    
@endsection