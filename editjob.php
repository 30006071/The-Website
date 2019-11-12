<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
    $user = 'root';
    $password = 'root';
    $db = 'W-Schedule';
    $host = 'localhost';
    $port = 8889;


$conn = new mysqli($host, $user, $password,$db,$port) or die("Connect failed: %s\n". $conn -> error);
$query = $conn->query("SELECT BookingID FROM Booking");
$BookingID = $_REQUEST['BookingID'];
$query2 = $conn->query("SELECT * FROM Booking WHERE BookingID = $BookingID" );

$CustomerID = $_REQUEST['CustomerID'];
$Rego = mysqli_real_escape_string($conn, $_REQUEST['Rego']);
$Mechanic = $_REQUEST['MechanicID'];
$Description = mysqli_real_escape_string($conn, $_REQUEST['Description']);
$TheTime = mysqli_real_escape_string($conn, $_REQUEST['TheTime']);
$TheDate = mysqli_real_escape_string($conn, $_REQUEST['TheDate']);
 
// Attempt insert query execution

if(isset($_POST['submit']))
{
            $sql = "INSERT INTO History (BookingID, CustomerID, Rego, Mechanic, TheTime, TheDate, Description) VALUES ( '$BookingID', '$CustomerID', '$Rego', '$Mechanic', '$TheTime', '$TheDate', '$Description')";
        if(mysqli_query($conn, $sql)){
            $sql2 = "DELETE FROM Booking WHERE CustomerID = '$CustomerID'";
            mysqli_query($conn, $sql2);
            header("Location:schedule.php");
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
}
if(isset($_POST['delete']))
{
            $sql = "DELETE FROM Booking WHERE CustomerID = '$CustomerID'";
        if(mysqli_query($conn, $sql)){
            header("Location:schedule.php");
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
}

if(isset($_POST['update']))
{
            $sql = "UPDATE Booking
            SET Description='$Description', TheTime='$TheTime', TheDate='$TheDate'
            WHERE BookingID='$BookingID'";
        if(mysqli_query($conn, $sql)){
            header("Location:schedule.php");
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
}
// foreach($query2 as $value)
// {
//    echo $value['BookingID'];
//    echo $value['Rego'];
// }
// var_dump($query2);
 
//  $query = $conn->query("SELECT BookingID FROM Booking");
//  $BookingID = $_REQUEST['BookingID'];    


?>