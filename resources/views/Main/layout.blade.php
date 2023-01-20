<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laract Penilaian Siswa</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>

    {{-- Header  --}}
    <div class="header">
        <img src="{{asset ('/gambar/header.jpg')}}" width="100%" height="40%" alt="">
    </div>

    {{-- Menu  --}}
    <div class="menu">
        <b>
            <a href="/home">Home</a>
            @if (session('user')->role == 'Admin')
            
                 <a href="/guru/index">Guru</a>
                 <a href="/jurusan/index">jurusan</a>
                 <a href="/kelas/index">Kelas</a>
                 <a href="/siswa/index">Siswa</a>
                 <a href="/mapel/index">Mapel</a>
                 <a href="/mengajar/index">Mengajar</a>
                
            @else
                <a href="/nilai/index">Nilai</a>
                
            @endif
    
                <a href="/logout">Logout</a>
        </b>
    </div>

    {{-- ---Content--- --}}
    <div class="content">
        @yield('content')
    </div>
    

    {{-- ---Footer--- --}}
    <div class="footer">
        <b>
            <p class="mar">2023 - Ujikom & LSP </p>
        </b>
    </div>
    


    
</body>
</html>