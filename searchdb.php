<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // // search in all table columns
    // // using concat mysql function
    $query = "SELECT * FROM `History` WHERE CONCAT(`BookingID`, `CustomerID`, `Rego`, `TheDate`, `TheTime`, `Mechanic`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `History`";
    $search_result = filterTable($query);
}
// function to connect and execute the query
// connect to db 

function filterTable($query)
{
   $user = 'root';
   $password = 'root';
   $db = 'W-Schedule';
   $host = 'localhost';
   
$conn = new mysqli($host, $user, $password,$db) or die("Connect failed: %s\n". $conn -> error);
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}
 