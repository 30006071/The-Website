<?php
// connect to db 


    $user = 'root';
    $password = 'root';
    $db = 'W-Schedule';
    $host = 'localhost';
    $port = 8889;
    
 $conn = new mysqli($host, $user, $password,$db,$port) or die("Connect failed: %s\n". $conn -> error);
 

$CustomerID = $_REQUEST['CustomerID'];
$Rego = mysqli_real_escape_string($conn, $_REQUEST['Rego']);
$Mechanic = $_REQUEST['MechanicID'];
$Description = mysqli_real_escape_string($conn, $_REQUEST['Description']);
$TheTime = $_REQUEST['TheTimeSlot'];
$Date = $_REQUEST['Date'];

$TheDate = date("Y-m-d", strtotime($Date));
 

// Attempt insert query execution
$sql = "INSERT INTO Booking (CustomerID, Rego, Mechanic, TheTime, TheDate, Description) VALUES ( '$CustomerID', '$Rego', '$Mechanic', '$TheTime', '$TheDate', '$Description')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
    header("Location:schedule.php?DateID=2019-11-20");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>