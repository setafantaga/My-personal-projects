<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('CSS/contact.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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

        <div class="contact-section">
            <h1>Contact Us</h1>

            <div class="contact-info">
                <div><i class="fa-solid fa-location-dot"></i>Adresa din Iasi, Strada x, nr. a</div>
                <div><i class="fa-solid fa-envelope"></i>adresademail@mail.com</div>
                <div><i class="fa-solid fa-phone"></i>+0 00000000</div>
            </div>
            
            @if(Session::get('message_sent'))
                <div class="alert alert-succes" role="alert">
                    {{ Session::get('message_sent') }}
                </div>
            @endif
            
            @if(auth()->user())
                <form class="contact-form" method="post" enctype="multipart/form-data" action="{{ route('contact') }}">
                    @csrf
                    @method('POST')

                    <input type="text" name="name" class="contact-form-text" placeholder="Your name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input type="email" name="email" class="contact-form-text" placeholder="Your email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input type="subject" name="subject" class="contact-form-text" placeholder="Subject">
                    @error('subject')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <textarea class="contact-form-text" name="msg" placeholder="Your message"></textarea>
                    @error('msg')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input type="submit" class="contact-form-btn" value="Send">
                </form>
            @endif
        </div>
    </div>

</body>
</html>