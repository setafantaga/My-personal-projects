<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/review.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Home</title>
    </head>

    <body>
      <div class="banner">
         <div class="navbar" id="myNavbar">
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
                <li><a href="../PHP/Welcome.php" target="_top">Home</a></li>
                <li><a href="../PHP/Review.php" target="_top">Review</a></li>
                <li><a href="../HTML/animals.html" target="_top">Animals</a></li>
                <li><a href="../HTML/search.html" target="_top">Search</a></li>
                <li><a href="../HTML/about.html" target="_top">About</a></li>
                <li><a href="../HTML/wiki.html" target="_top">Wiki</a></li>
                <li><a href="../HTML/raport.html" target="_top">Raport</a></li>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
            </ul>
         </div>
      

         <div class="testimonial-heading">
               <span>Coments</span>
         </div>

         <section id="comments">
      
            <div class="comments-info">

               <?php 
               $conn = mysqli_connect("localhost", "root", "", "atlaszoologic") or die("Connection failed");
               $query = "SELECT id, username, comment, date FROM review";
               $result = $conn->query($query);
               
               if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
            ?>
                  <div class="comments-box">
                  <img src="../Img/profile.jpg" alt="">
                  <div class="name">
                     <h3> <?php echo $row["username"] ?> </h3>
                     <h5> <?php echo $row["date"] ?> </h5>
                     <p> <?php echo $row["comment"]; ?> </p>
                  </div> 

                  <?php if($_SESSION['username'] == 'admin') { ?>
                     <div class="delete">
                        <div class="delete" name="delete" id="delete-
                                 <?php echo $row["id"];?>"
                                 onclick="deleteComment(<?php echo $row['id'];?>)"> 
                                 <button><i class="fa fa-trash-o"></i></button>
                        </div>
                     </div>
                  <?php } ?>
               </div>
            <?php          
                  }
                  
              } else {
                  echo "0 results";
              }
              
              $conn->close();
            ?>
               
            </div>
            <div id="demo"></div>

            <?php if($_SESSION['username'] == true) {?>
               <form method="POST" id="form" name="form" action="commentForm.php">
                  <div class="commets-container">
                     <div class="package1">
                        <img src="../Img/profile.jpg" alt="">
                        <input type="text" placeholder="username" name="username" id="username" value="<?php echo $_SESSION["username"] ?>">
                     </div>
                     <div class="package2">
                        <textarea name="message" id="message" rows="5" placeholder="Do you want to say something?"></textarea>
                     </div>
                     <div class="package3">
                        <input type="submit" class="send-btn" value="Send" name="post" >
                     </div>
                  </div>
               </form>
            <?php } ?>
         </section>

      </div>

      <script>
         function deleteComment(id){
            if(confirm('Are you sure you want to delete this comment?')){
               // $.ajax({
               //    url: "commentDeleteForm.php",
               //    type: "GET",
               //    data: 'id='+id,
               //    dataType: 'json',
               //    success: function(result) {
               //       if(result.success){
               //          $('#demo').html('<div style=color:green>'+result.message+'</div>');
               //          //window.location.href='';
               //          //load_comment();
               //       }else{
               //          $('#demo').html('<div style=color:red>**'+result.message+'</div>');
               //       }
               //    }
               // });
               var xhr = new XMLHttpRequest();

                // Making our connection
                var url = "../PHP/commentDeleteForm.php?id="+id;
                xhr.open("POST", url, true);
                console.log("i'm here");
                // function execute after request is successful 
                xhr.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log(this.responseText);
                        console.log(this);
                    }
                }
                const ID = {id: id};
                console.log(ID);
                xhr.send();
                console.log("i'm here3");
            }
         }

         // function submitForm(){
         //    var xhr = new XMLHttpRequest();

         //        // Making our connection
         //       var username = document.getElementById("username").value;
         //       var message= document.getElementById("message").value;
         //        var url = "../PHP/commentForm.php?username="+username+"&message="+message;
         //        xhr.open("POST", url, true);
         //        console.log("i'm here");
         //        // function execute after request is successful 
         //        xhr.onreadystatechange = function () {
         //            if (this.readyState == 4 && this.status == 200) {
         //                console.log(this.responseText);
         //                console.log(this);
         //            }
         //        }
         //        //const ID = {id: id};
         //        //console.log(ID);
         //        //xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8');
         //        xhr.send();
         //        console.log("i'm here3");
         //    }

         // $(document).ready(function(){
         //    $('#form').on('submit', function(event){
         //       event.preventDefault();
         //       var form = $(this).serialize();
         //       $.ajax({
         //          type: 'POST',
         //          url: "commentForm.php",
         //          data: { 
         //             username : $('#username').val(),
         //             message : $('#message').val(),
         //          },
         //          dataType : 'json',
         //          success : function(result){
         //             if(result.success){
         //                $('#demo').html('<div style=color:green>'+result.message+'</div>');
         //                //window.location.href='';
         //                //load_comment();
         //             }else{
         //                $('#demo').html('<div style=color:red>**'+result.message+'</div>');
         //             }
         //          }
         //       });
         //       return false;
         //    });
            // load_comment();
            // function load_comment(){
            //       $.ajax({
            //       url:"commentLoadForm.php",
            //       method:"POST",
            //       success:function(result)
            //       {
            //       $('#display_comment').html(result);
            //       }
            //    })
            //}
      </script>
    </body>
</html>