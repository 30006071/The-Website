<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // // search in all table columns
    // // using concat mysql function
    $query = "SELECT * FROM `History` WHERE CONCAT(`CustomerID`, `Rego`, `TheDate`, `TheTime`, `Mechanic`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `History`";
    $search_result = filterTable($query);
}
// function to connect and execute the query
function filterTable($query)
{
   $user = 'root';
   $password = 'root';
   $db = 'W-Schedule';
   $host = 'localhost';
   $port = 8889;
   
$conn = new mysqli($host, $user, $password,$db,$port) or die("Connect failed: %s\n". $conn -> error);
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}
 