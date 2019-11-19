<?php
include("customerlist.php");
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Booking</title>
    <link rel="stylesheet" href="/Scripts/mystyle.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        /* background photo */
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
        <form name="bookingform" action="insertbooking.php" method="POST" onsubmit="return validateForm()">
        <label for="Customer">Customer:</label>
                <select class="form-control" name = "CustomerID" id="CustomerSelect">
                <option value=''  >Select Customer</option>
                    <?php
                    while($rows = $query->fetch_assoc())
                    {
                        $CustomerID = $rows['CustomerID'];
                        echo"<option value='$CustomerID'>$CustomerID</option>";
                        
                    }
                    ?>
                </select>
                <label for="CarRego">Rego:</label>
                <input type="text" class="form-control" maxlength="6" id="CarRego" name="Rego" placeholder="ABC123">
                <label for="TheMechanics">Mechanics:</label>
                <select class="form-control" name = "MechanicID" id="MechanicSelect">
                <option value=''  >Select Mechanic</option>
                    <!-- Select mechanic sql query shows all listed mechanics -->
                    <?php
                    while($rows = $querytwo->fetch_assoc())
                    {
                        $MechanicID = $rows['MechanicID'];
                        echo"<option value='$MechanicID'>$MechanicID</option>";
                        
                    }
                    ?>
                </select>
                <label for="Time">Time:</label>
                <select class="form-control" name = "TheTimeSlot" id="TimeSelect">
                <option value=''  >Select Time</option>
                <!-- Select time sql query shows all listed timeslots -->
                    <?php
                    while($rows = $querythree->fetch_assoc())
                    {
                        $TheTimeSlot = $rows['TheTimeSlot'];
                        echo"<option value='$TheTimeSlot'>$TheTimeSlot</option>";
                        
                    }
                    ?>
                </select>
                <label for="Date">Date:</label>
                <!-- Date picker -->
                <input type="date" id="Date" placeholder="select date" class="form-control" name="Date">
                <label for="TheDescription">Description</label>
                <input type="text" class="form-control" id="TheDescription" name="Description" placeholder="Description of booking">
                <input type="submit" class="form-control" value="Submit">
            
        </form>
</div>
</body>
<script src="myformvalidation.js"></script>
</html>