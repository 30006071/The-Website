<?php 
session_start();
 $username = $_SESSION['username']; //retrieve the session value
 if(!isset($_SESSION['username'])) //If user is not logged in then //he cannot //access the welcome page
 {
 echo "
     <script>alert('Currently you are not logged in that's why you redirecting to login page!');
      window.location='login.php';
     </script>";
 }
 ?>
<html>
 <head>
     <title>
         Welcome Page
     </title>
 </head>
    <body><br/><br/>
    <center>
        Welcome User <?php echo $username;?>.<br/>
        <a href="logout.php">Logout?</a>
    </center>
    </body>
</html>