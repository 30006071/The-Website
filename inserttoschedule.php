<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
    $user = 'root';
    $password = 'root';
    $db = 'W-Schedule';
    $host = 'localhost';
    $port = 8889;
    
 $conn = new mysqli($host, $user, $password,$db,$port) or die("Connect failed: %s\n". $conn -> error);
 
 
 $query = $conn->query("SELECT * FROM Booking WHERE DATE(TheDate) = DATE(NOW())" );
// Close connection
mysqli_close($conn);
?>