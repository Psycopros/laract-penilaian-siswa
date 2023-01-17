@extends('main.layout')
@section('content')

    <center>

        <br>
        <h2>edit Data Guru</h2>

        <form action="/siswa/update/{{$siswa->id}}" method="Post">
        @csrf
        <table width="50%">
            <tr>
                <td>Nis</td>
                <td><input type="text" name="nis" value="{{$siswa->nis}}"></td>
            </tr>

            <tr>
                <td>Nama Siswa</td>
                <td><input type="text" name="nama_siswa" value="{{$siswa->nama_siswa}}"></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="JK" value="L" {{$siswa->JK == 'L' ? 'checked' : ''}}>Laki-laki
                    <input type="radio" name="JK" value="P" {{$siswa->JK == 'P' ? 'checked' : ''}}>Perempuan
                </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="30" rows="5">{{$siswa->alamat}}</textarea></td>
            </tr>

            <td width="25%">Nama kelas</td>
                <td width="25%">
                    <select name="kelas_id">
                        @foreach ($kelas as $k)
                        @if ($siswa->kelas_id == $k->id)
                            <option value="{{$k->id}}" selected>{{$k->nama_kelas}}</option>
                        @else
                            <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
                        @endif
            
                        @endforeach
                    </select>
                </td>

            <tr>
                <td>password</td>
                <td><input type="password" name="password" value="{{$siswa->password}}"></td>
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