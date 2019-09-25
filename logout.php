<?php
 session_start();
 $username = $_SESSION['username']; //retrieve the session variable
 unset($_SESSION['username']); //to remove session variable
 session_destroy(); //destroy the session 
?>
<html>
  <head>   
    <title>Logout Page</title>
   </head>
<body>
    <center>
       <h4>Your are logged out<h4>
       <h4><a href="login.php">Login Again?<a></h4>
    </center>
</body>
</html>