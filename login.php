<?php
 session_start(); 
 if(isset($_SESSION['username'])) //If user is already logged in //then   
{ echo "
   <script>alert(' you are already logged in that's why you redirecting to schedule page!');
     alert('If u want to login again then logout first!');
      window.location='schedule.php';
   </script>";
 }
  if($_SERVER["REQUEST_METHOD"] == "POST")
{ 
  $username=$_POST['username'];  
  $password=$_POST['password']; 
  include('config.php'); 
                          
  $sql_query = "select count(*) as cntUser from login where username='".$username."' and password='".$password."'";
  $result = mysqli_query($con,$sql_query);
  $row = mysqli_fetch_array($result);
  $count = $row['cntUser'];

 if($count > 0){ 
 $_SESSION['username'] = $username;
 echo "<script>
 alert('Success...'); 
 function redi(){window.location='welcome.php';}
 var msg='Please Wait While Redirecting To Welcome Page...'; 
 document.write('<font color=blue>'+'please wait while redirecting to Welcome page...'+'</font>');
 setTimeout('redi()',3000);
        </script>";     
         }
else{
    echo "
     <script>alert('Invalid Login Details...'); 
     </script>"; 
    }
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Scripts/mystyle.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body{
              background: url(Images/BackG.jpg);
              background-repeat: no-repeat;
              background-size: 100% 100%;
            }
    </style>
</head>
<body>
    <div id="container-login">
        <div id="title">
            W-Schedule Login
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="input">
              
                <input id="username" placeholder="Username" type="text" required class="validate" autocomplete="off">
            </div>
            <div class="clearfix"></div>
            <div class="input">
            
                <input id="password" placeholder="Password" type="password" required class="validate" autocomplete="off">
            </div>
            
            
            <input type="submit" value="Log In"/>
           
        </form>
        <button id="register-link">Forgot<br> Password</button>
        
    </div>
</body>
</html>