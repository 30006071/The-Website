<?php
// connect to db 
    $user = 'root';
    $password = 'root';
    $db = 'W-Schedule';
    $host = 'localhost';
    
 $conn = new mysqli($host, $user, $password,$db) or die("Connect failed: %s\n". $conn -> error);
 $query = $conn->query("SELECT CustomerID FROM Customer");
 $querytwo = $conn->query("SELECT MechanicID FROM Mechanic");
 $querythree = $conn->query("SELECT * FROM TimeSlots");
?>