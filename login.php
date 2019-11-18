

    <?php

    // Include php file

    require_once 'config.php';

     

    // Define variables

    $username = $password = "";

    $username_err = $password_err = "";



    if($_SERVER["REQUEST_METHOD"] == "POST"){

     

        // Check if username is empty
        //Trim removes whitespacing

        if(empty(trim($_POST["username"]))){

            $username_err = 'Please enter username.';

        } else{

            $username = trim($_POST["username"]);

        }

        

        // Check if password is empty

        if(empty(trim($_POST['password']))){

            $password_err = 'Please enter your password.';

        } else{

            $password = trim($_POST['password']);

        }

        //if statement checking if error vars are empty
        if(empty($username_err) && empty($password_err)){

            //sql query
            $sql = "SELECT username, password FROM users WHERE username = :username";

            

            if($stmt = $pdo->prepare($sql)){


                $stmt->bindParam(':username', $param_username, PDO::PARAM_STR);

                

                $param_username = trim($_POST["username"]);

                


                if($stmt->execute()){


                    if($stmt->rowCount() == 1){

                        if($row = $stmt->fetch()){

                            $hashed_password = $row['password'];

                            if(password_verify($password, $hashed_password)){


                                session_start();

                                $_SESSION['username'] = $username;      

                                header("location: schedule.php");

                            } else{


                                $password_err = 'The password you entered was not valid.';

                            }

                        }

                    } else{


                        $username_err = 'No account found with that username.';

                    }

                } else{

                    echo "Oops! Something went wrong. Please try again later.";

                }

            }


            unset($stmt);

        }


        unset($pdo);

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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">

                    <label>Username:<sup>*</sup></label>

                    <input type="text" name="username"class="u-full-width" value="<?php echo $username; ?>">

                    <p><?php echo $username_err; ?></p>

                </div>    

                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">

                    <label>Password:<sup>*</sup></label>

                    <input type="password" name="password" class="u-full-width">

                    <p><?php echo $password_err; ?></p>

                </div>

                <div class="form-group">

                    <input type="submit" class="btn btn-primary" value="Submit">

                </div>


            </form>
        
    </div>
</body>
</html>