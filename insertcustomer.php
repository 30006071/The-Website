<?php
// connect to db 

    $user = 'root';
    $password = 'root';
    $db = 'W-Schedule';
    $host = 'localhost';
    
 $conn = new mysqli($host, $user, $password,$db) or die("Connect failed: %s\n". $conn -> error);
 
// Escape user inputs for security
$CustomerID = mysqli_real_escape_string($conn, $_REQUEST['CustomerID']);
$Phnum = mysqli_real_escape_string($conn, $_REQUEST['Phnum']);
$Email = mysqli_real_escape_string($conn, $_REQUEST['Email']);
 
// Attempt insert query execution
$sql = "INSERT INTO Customer (CustomerID, Phnum, Email) VALUES ('$CustomerID', '$Phnum', '$Email')";
if(mysqli_query($conn, $sql)){
    header("Location:schedule.php?DateID=2019-11-20");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
// Close connection
mysqli_close($conn);
?>