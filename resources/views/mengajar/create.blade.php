@extends('main.layout')
@section('content')

    <center>

        <br>
        <h2>Tambah Data Mengajar</h2>

        <form action="/mengajar/store" method="Post">
        @csrf
        <table width="50%">
            <tr>
            <td width="25%">Nama Guru: </td>
            <td width="25%">
                <select name="guru_id">
                    @foreach ($guru as $g)
                        <option value="{{$g->id}}">{{$g->nama_guru}}</option>
                    @endforeach
                </select>
            </td>
        </tr>

        <tr>
            <td width="25%">Nama Mapel: </td>
            <td width="25%">
                <select name="mapel_id">
                    @foreach ($mapel as $m)
                        <option value="{{$m->id}}">{{$m->nama_mapel}}</option>
                    @endforeach
                </select>
            </td>
        </tr>

        <tr>
            <td width="25%">Nama Kelas: </td>
            <td width="25%">
                <select name="kelas_id">
                    @foreach ($kelas as $k)
                        <option value="{{$k->id}}">{{$k->nama_kelas}} {{$k->jurusan->nama_jurusan}}</option>
                    @endforeach
                </select>
            </td>
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