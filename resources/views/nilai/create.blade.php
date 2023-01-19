@extends('main.layout')
@section('content')

    <center>

        <br>
        <h2>Tambah Data Nilai</h2>

        <form action="/nilai/store" method="Post">
        @csrf
        <table width="50%">

            <tr>
                <td width="25%">Pengajar</td>
                <td width="25%">
                <select name="mengajar_id">
                    @foreach ($mengajar as $m)
                        <option value="{{$m->id}}">{{$m->guru->nama_guru}}</option>
                    @endforeach
                </select>
                </td>
            </tr>

            <tr>
                <td width="25%">Nama Siswa</td>
                <td width="25%">
                    <select name="siswa_id">
                        @foreach ($siswa as $s)
                            <option value="{{$s->id}}">{{$s->nama_siswa}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td width="25%">Nilai UH</td>
                <td width="25%"><input type="text" name="uh"></td>
            </tr>

            <tr>
                <td width="25%">Nilai UTS</td>
                <td width="25%"><input type="text" name="uts"></td>
            </tr>

            <tr>
                <td width="25%">Nilai UAS</td>
                <td width="25%"><input type="text" name="uas"></td>
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