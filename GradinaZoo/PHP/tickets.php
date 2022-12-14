<?php include 'tickets_db.php'; ?>

<html lang="en"><head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/tickets.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&amp;display=swap" rel="stylesheet">
  <title>Tickets</title>
</head>
<body>
  <div class="banner">
    <div class="navbar">
    <ul>
          <?php
              session_start();
              if(isset($_SESSION['id']) && isset($_SESSION['username'])){
          ?>
          <li> <img src="../Img/profile.jpg" alt=""> </li>
          <li> <h1>Hello, <?php echo $_SESSION['username']; ?></h1> </li>
          <li><a href="logout.php" target="_top">Logout</a></li>
          <?php
              }else{
          ?>
          <li><a href="Login.php" target="_top">Log In</a></li>
          <?php
              }
          ?>
          <?php if($_SESSION['username'] == 'admin'){?>
              <li><a href="adminPage.php" target="_top">AdminSection</a></li>
          <?php
              }
          ?>
      </ul>
        <ul>
            <strong><li><a href="Welcome.php">Home</a></li></strong>
            <strong><li><a href="Review.php">Review</a></li></strong>
            <strong><li><a href="/PHP/search.php">Search</a></li></strong>
            <strong><li><a href="about.php">About</a></li></strong>
            <strong><li><a href="animals.php">Animals</a></li></strong>
            <strong><li><a href="tickets.php">Tickets</a></li></strong>
            <strong><li><a href="contact.php">Contact Us</a></li></strong>
            <strong><li><a href="Login.php">LogIn</a></li></strong>
            <strong><li><a href="logout.php">Logout</a></li></strong>
            <strong><li><a href="../HTML/raport.html">Raport</a></li></strong>
            <strong><li><a href="tickets_table.php">Status</a></li></strong>
        </ul>
    </div>
    <br>
    <br>
    <br>
    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>Ticket types:</div>
        <div><i class="fas fa-envelope"></i>Normal ticket (monday to friday) : 15 RON</div>
        <div><i class="fas fa-phone"></i>Weekend ticket (saturday and sunday) : 10 RON</div>
        <div><i class="fas fa-clock"></i>Kids ticket (all the week) : 5 RON</div>
      </div>
      <div class="contact-form">
        <h2>Buy a ticket</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Name" required>
          <input type="email" name="email" class="text-box" placeholder="Email" required>
          <input type="phone" name="phone" class="text-box" placeholder="Phone number" required>
          <!-- <input type="date" name="date" class="text-box" required="" id="res_date" name="date" value="2022-06-18"> -->
          <input type="date" name="date" class="data-box" required="" id="res_date" name="date" value="2022-06-18">

          <div class="select">
          <select name="ticket">
          <option selected disabled>Choose a ticket type</option>
          <option value="normal">Normal ticket</option>
          <option value="weekend">Weekend ticket</option>
          <option value="kids">Kids ticket</option>
          </select>
          <!-- <label for="slot"> Slot </label>
          <select id="slot">
          <option selected disabled>Choose a ticket type</option>
          <option value="normal">Normal ticket</option>
          <option value="weekend">Weekend ticket</option>
          <option value="kids">Kids ticket</option>
          </select>     -->
          </div>

          <input type="submit" name="submit" class="send-btn" value="Buy">
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body></html>