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

        <form action="schedule.php">
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