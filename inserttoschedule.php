<?php
// connect to db 

    $user = 'root';
    $password = 'root';
    $db = 'W-Schedule';
    $host = 'localhost';
    
 $conn = new mysqli($host, $user, $password,$db) or die("Connect failed: %s\n". $conn -> error);
 
 $Date = $_REQUEST['DateID'];
 
$query = $conn->query("SELECT * FROM Booking WHERE TheDate = '".$Date."' ORDER BY `Booking`.`TheTime` ASC" );
// Close connection
mysqli_close($conn);
?>