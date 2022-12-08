
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('CSS/register.css') }}">
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
        
            <div class="register-form">
                <h1>Register</h1>
                <form method="POST" action="register">
                    @csrf
    
                    <div class="form">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="Your name" required>
                        @error('name')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
    
                    <div class="form">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="Username" placeholder="Your username" required>
                        @error('username')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
    
                    <div class="form">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Your validated email" required>
                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="form">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="Password" placeholder="Enter your password" required>
                        @error('password')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <button type="submit" >Sign Up</button>
    
                </form>
            </div>
        
        </div>
    
    </body>    
</html>


