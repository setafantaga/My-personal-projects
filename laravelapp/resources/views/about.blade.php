<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('CSS/about.css') }}">
    <title>Animals world! </title>
</head>
<body>

    <div class="banner">
        <div class="navbar">
            @auth
                <ul> 
                    <li><span>Welcome, {{ auth()->user()->name }}! </span> </li>
                    <li> <form method="POST" action="logout">
                        <a href="session">Logout</a>
                        @csrf
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

        <div class="about"> 
            <h1>About Us</h1> 
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione nostrum quam assumenda dolores vel ipsam. Labore velit sit iste error rem similique unde ipsam eveniet natus aliquid amet, pariatur eum perferendis beatae, eos maxime architecto? Corrupti voluptates neque animi veritatis laborum velit ratione beatae iusto sapiente? Numquam sit enim delectus aliquam quaerat incidunt reiciendis quae officiis quas pariatur blanditiis tempora dolore, harum et tenetur ratione repellat consequatur assumenda! Fuga reprehenderit, placeat voluptates officia distinctio ut odit? Itaque, quas eaque deleniti voluptatum suscipit tenetur sint, numquam neque illum, non alias nam impedit corrupti eveniet quod necessitatibus ex! Qui obcaecati omnis magnam!
            </p>

            <div>
                <a href="contact">
                    <button type="button">Contact Us</button>
                </a>
            </div>
        </div>

        <div class="image-section">
            <img src="Img/about-us.jpeg">
        </div>
        
    </div>

</body>
</html>