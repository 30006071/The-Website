<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
    $user = 'root';
    $password = 'root';
    $db = 'W-Schedule';
    $host = 'localhost';
    $port = 8889;
    
 $conn = new mysqli($host, $user, $password,$db,$port) or die("Connect failed: %s\n". $conn -> error);
 $query = $conn->query("SELECT CustomerID FROM Customer");
 $querytwo = $conn->query("SELECT MechanicID FROM Mechanic");
 $querythree = $conn->query("SELECT * FROM TimeSlots");
?>