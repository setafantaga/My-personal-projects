<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('CSS/album.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/albums.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Animals world! </title>
</head>
<body>

    <div class="banner">
        <div class="navbar">
            @auth
            <ul> 
                <li><span>Welcome, {{ auth()->user()->name }}! </span> </li>
                <li> <form method="POST" action="logout">
                    <a href="logout">Logout</a>
                    @csrf
                    {{-- <button type="submit">Log Out</button>  --}}
                </form> </li>
            </ul>
        @else
            <ul>
                <li><a href="session">Log In</a></li>
            </ul>
        @endauth
            <ul>
                <li><a href="albums">Albums</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </div>


       @yield('content')
    
    </div>


    {{-- <link rel="stylesheet" href="CSS/animals.css">

    <div class="album album1">
        <a href="albums/{{ $album->slug }}">First</a>
        <p>This is the first album</p>
    </div>

    <div class="album album2">
        <a href="albums/{{ $album->slug }}">Second</a>
        <p>This is the second album</p>
    </div>

    <div class="album album3">
        <a href="albums/{{ $album->slug }}">Third</a>
        <p>This is the third album</p>
    </div>

    <div class="album album4">
        <a href="albums/{{ $album->slug }}">Four</a>
        <p>This is the four album</p>
    </div>

    <div class="album album5">
        <a href="albums/{{ $album->slug }}">Five</a>
        <p>This is the five album</p>
    </div>

    <div class="album album6">
        <a href="albums/{{ $album->slug }}">Six</a>
        <p>This is the six album</p>
    </div>

    <div class="album album7">
        <a href="albums/{{ $album->slug }}">Seven</a>
        <p>This is the seven album</p>
    </div> --}}


</body>