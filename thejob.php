<?php

include("editjob.php");
//Adding the php to the top.
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Schedule</title>
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
    Edit Booking
    </div>

    <div class="formscentre">

            <form action="editjob.php" method="POST">

                <label for="selectBookingID">BookingID:</label>

                <select class="form-control" onChange()="<?php $_POST['BookingID'] ?>" name="BookingID" id="BookingSelect">
                    <?php
                    while($rows = $query->fetch_assoc())
                    {
                        $BookingID = $rows['BookingID'];
                        echo"<option value='$BookingID'>$BookingID</option>";
                    } 
                    ?> 
                </select>
                <?php while($row = mysqli_fetch_array($query2));?> 
                <label for="CarRego">Rego:</label>
                <input type="text" class="form-control" id="CarRego" name="Rego" placeholder="ABC123" value="<?php echo $row['Rego']?>">
                <label for="TheMechanics">Mechanics:</label>
                <input type="text" class="form-control" name = "MechanicID" id="MechanicSelect" value="mechanicvalue">
                <label for="Time">Time:</label>
                <input type="text" class="form-control" id="Time" name="TheTime" value="timevalue">
                <label for="Date">Date:</label>
                <input type="text" class="form-control" id="Date" name="TheDate" value="datevalue">
                <label for="TheDescription">Description</label>
                <input type="text" class="form-control" id="TheDescription" name="Description" value="descriptionvalue">
                <input type="submit" class="form-control" value="Submit">
            
            </form>
    </div>
</body>

</html>