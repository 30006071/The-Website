<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
    $user = 'root';
    $password = 'root';
    $db = 'W-Schedule';
    $host = 'localhost';
    $port = 8889;
    
 $conn = new mysqli($host, $user, $password,$db,$port) or die("Connect failed: %s\n". $conn -> error);
 
 $Date = $_REQUEST['DateID'];
//echo $Date;
//echo "SELECT * FROM Booking WHERE TheDate = $Date ORDER BY `Booking`.`TheTime` ASC";
$query = $conn->query("SELECT * FROM Booking WHERE TheDate = '".$Date."' ORDER BY `Booking`.`TheTime` ASC" );
// Close connection
mysqli_close($conn);
?>