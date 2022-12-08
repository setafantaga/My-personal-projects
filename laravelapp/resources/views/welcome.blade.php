<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('CSS/welcome.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Animals world! </title>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            @auth
                <ul>
                    @if (auth()->user()->username == 'admin')
                        <li><a href="admin/adminAlbumSection">ADMIN</a></li>
                    @endif
    
                    <li><span>Welcome, {{ auth()->user()->name }}! </span> </li>
                    <li> <form method="POST" action="logout">
                        @csrf
                    <li><a  href="{{ url('/logout') }}">Log Out</a></li>
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
    </div>

    <div class="content">
        <h1>Atlas zoologic</h1>
        <p> Atlasul zoologic reprezinta un amplu material stiintific adresat elevilor, studentilor si profesorilor, <br> prezentat intr-o forma grafica deosebita, cu ilustratii de 
            calitate, atractive si elocvente. <br> Este un indrumator temeinic pentru intelegerea lumii animale, a complexitatii si evolutiei ei.
        </p>
        
        <div>
            <a href="introduction">
                <button type="button">Introducere</button>
            </a>
        </div>
    </div>

</body>
</html>