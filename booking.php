<?php
include("customerlist.php");
// include("mechaniclist.php");
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Booking</title>
    <link rel="stylesheet" href="/Scripts/mystyle.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body{
              background: url(Images/BackG.jpg);
              background-repeat: no-repeat;
              background-size: 100%;
              background-attachment: fixed;
            }
    </style>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class = "scheduletitle">
    New Booking
</div>
<div class="formscentre">
        <form action="insertbooking.php" method="POST">
        <label for="Customer">Customer:</label>
                <select class="form-control" name = "CustomerID" id="CustomerSelect">
                    <?php
                    while($rows = $query->fetch_assoc())
                    {
                        $CustomerID = $rows['CustomerID'];
                        echo"<option value='$CustomerID'>$CustomerID</option>";
                        
                    }
                    ?>
                </select>
                <label for="CarRego">Rego:</label>
                <input type="text" class="form-control" id="CarRego" name="Rego" placeholder="ABC123">
                <label for="TheMechanics">Mechanics:</label>
                <select class="form-control" name = "MechanicID" id="MechanicSelect">
                    <?php
                    while($rows = $querytwo->fetch_assoc())
                    {
                        $MechanicID = $rows['MechanicID'];
                        echo"<option value='$MechanicID'>$MechanicID</option>";
                        
                    }
                    ?>
                </select>
                <label for="Time">Time:</label>
                <input type="text" class="form-control" id="Time" name="TheTime" placeholder="13:25:00">
                <label for="Date">Date:</label>
                <input type="text" class="form-control" id="Date" name="TheDate" placeholder="2019/11/11">
                <label for="TheDescription">Description</label>
                <input type="text" class="form-control" id="TheDescription" name="Description" placeholder="Description of booking">
                <input type="submit" class="form-control" value="Submit">
            
        </form>
</div>
</body>

</html>