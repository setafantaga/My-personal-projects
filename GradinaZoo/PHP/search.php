<!DOCTYPE html>
<html>

<head>
    <title lang="en">Search Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Search page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/search.css">
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <ul>
            <li><a href="/PHP/Welcome.php">Home</a></li>
                <li><a href="/PHP/Review.html">Review</a></li>
                <li><a href="/PHP/search.php">Search</a></li>
                <li><a href="/PHP/about.php">About</a></li>
                <li><a href="/PHP/animals.php">Animals</a></li>
                <li><a href="/PHP/contact.php">Contact Us</a></li>
                <li><a href="/PHP/login.php">LogIn</a></li>
                <li><a href="/PHP/logout.php">Logout</a></li>
                <li><a href="raport.html">Raport</a></li>
            </ul>
        </div>
    </div>
    </div>
    <div id="super-container">
        <div id="container">
            <div id="search">
                <form>
                    <input type="text" size="30" placeholder="grey omnivore" onkeyup="showResults(this.value)">
                </form>
            </div>
            <!--TODO: Add some select animals-->
            <div id="slide-show">
                <div class="slides">
                    <a href="wiki.php/q?file=grey parrot.xml"><img src="../Img/440px-Psittacus_erithacus_-perching_on_tray-8d.jpg"></a>
                </div>

                <div class="slides">
                    <a href="wiki.php/q?file=wolf.xml"><img src="../Img/Front_view_of_a_resting_Canis_lupus_ssp.jpg"></a>
                </div>

                <div class="slides">
                    <a href="wiki.php/q?file=gorilla.xml"><img src="../Img/Gorille_des_plaines_de_louest_à_lEspace_Zoologique.jpg"></a>
                </div>

                <div class="slides">
                    <a href="wiki.php/q?file=giant panda.xml"><img src="../Img/Grosser_Panda.jpg"></a>
                </div>

                <div class="slides">
                    <a href="wiki.php/q?file=bobcat.xml"><img src="../Img/Bobcat_at_Columbus_Zoo_Boo.jpg"></a>
                </div>

                <div class="slides">
                    <a href="wiki.php/q?file=komodo dragon.xml"><img src="../Img/Komodo_dragon_with_tongue.jpg"></a>
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                <div class="caption-container">
                    <p id="caption"></p>
                </div>

                <div class="row">
                    <div class="column">
                        <img class="demo cursor" src="../Img/440px-Psittacus_erithacus_-perching_on_tray-8d.jpg" width="100%" onclick="currentSlide(1)"
                            alt="Grey Parrot">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../Img/Front_view_of_a_resting_Canis_lupus_ssp.jpg" width="100%" onclick="currentSlide(2)"
                            alt="Wolf">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../Img/Gorille_des_plaines_de_louest_à_lEspace_Zoologique.jpg" width="100%" onclick="currentSlide(3)"
                            alt="Gorilla">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../Img/Grosser_Panda.jpg" width="100%" onclick="currentSlide(4)"
                            alt="Giant Panda">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../Img/Bobcat_at_Columbus_Zoo_Boo.jpg" width="100%" onclick="currentSlide(5)"
                            alt="Bobcat">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../Img/Komodo_dragon_with_tongue.jpg" width="100%" onclick="currentSlide(6)"
                            alt="Komodo dragon">
                    </div>
                </div>
            </div>
            <script src="../JS/slideshow.js"></script>
            <div id="animalgrid">
                
            </div>
            <script src="../JS/searchHandler.js"></script> 
        </div>
    </div>
</body>
</html>