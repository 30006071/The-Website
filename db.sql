<?php
$dsn = "mysql:host=localhost;dbname=W-Schedule";
$username = "Damien";
$password = "1234";

try{
    $db = new PDO($dsn, $username, $password);
    echo "You have connected";
}
catch(PDOException $e){
    $error_message = $e->getMessage();
    echo $error_message;
    exit();
}
?>