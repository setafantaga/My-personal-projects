<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('CSS/login.css') }}">
        <title>Animals world! </title>
    </head>
    <body>
        <div class="banner">
            <div class="navbar">
                @auth
                    <ul>
                        <form action="POST">
                            <li><a href="logout">Logout</a></li>
                            <span>Welcome, {{ auth()->user()->name }}!</span>
                        </form>
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
    
        <div class="login-form">
            <h1>Log In</h1>
            <form method="POST" action="session">
                @csrf

                <div class="form">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="Email" placeholder="Your Email" required>
                    @error('email')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="form">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="Password" placeholder="Your password" required>
                    @error('password')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                
                <button type="submit">Log In</button>

                <div class="singup_link">
                    Not a member? <a href="register">Sign Up</a>
                </div>
            </form>
        </div>
    
    </body>
</html>

