
<?php
// connect to db 

    $user = 'root';
    $password = 'root';
    $db = 'W-Schedule';
    $host = 'localhost';
    
 $conn = new mysqli($host, $user, $password,$db) or die("Connect failed: %s\n". $conn -> error);
 
// Escape user inputs for security
$MechanicID = mysqli_real_escape_string($conn, $_REQUEST['MechanicID']);
$IRD = mysqli_real_escape_string($conn, $_REQUEST['IRD']);
$Email = mysqli_real_escape_string($conn, $_REQUEST['Email']);
 
// Attempt insert query execution
$sql = "INSERT INTO Mechanic (MechanicID, IRD, Email) VALUES ('$MechanicID', '$IRD', '$Email')";
if(mysqli_query($conn, $sql)){
    header("Location:schedule.php?DateID=2019-11-20");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
// Close connection
mysqli_close($conn);
?>