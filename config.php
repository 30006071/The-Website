<?php
/* Assume we are running MySQL with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mysql2123');

/* Attempting to connect to MySQL database */
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Checking connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>