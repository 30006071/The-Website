<?php

include("editjob.php");
//Adding the php to the top.

$bookid = $_GET['BookingID'];

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

                <!-- onchange="window.location='thejob.php?BookingID='+this.value;" -->

                <select class="form-control" onChange="testing(event)"  name="BookingID" id="BookingSelect">
                <option value=''  >Select BookingID</option>
                 <?php
                    while($rows = $query->fetch_assoc())
                    {
                        $BookingID = $rows['BookingID'];

                        echo ($bookid == $BookingID) ? "<option value='$BookingID' selected >$BookingID</option>" : "<option value='$BookingID' >$BookingID</option>";
         
                        //echo"<option id='BookingSelect' value='$BookingID' >$BookingID</option>";
                    } 
                    ?>  

                    
                </select>

                    

                            <script>
                                var myselect = document.getElementById("myselect");
                                myselect.options.selectedIndex = <?php echo $_GET["pos"]; ?>
                            </script>

                <?php 
                foreach($query2 as $value)
                 {
                     $customer= $value['CustomerID'];
                    $id= $value['BookingID'];
                    $rego= $value['Rego'];
                    $mechanic= $value['Mechanic'];
                    $time = $value['TheTime'];
                    $date = $value['TheDate'];
                    $desc = $value['Description'];

                 }
                ?> 
                <label for="CustomerID">CustomerID:</label>
                <input type="text" class="form-control" id="Customer" name="CustomerID" placeholder="John Doe" value="<?php echo $customer?>">
                <label for="CarRego">Rego:</label>
                <input type="text" class="form-control" id="CarRego" name="Rego" placeholder="ABC123" value="<?php echo $rego?>">
                <label for="TheMechanics">Mechanics:</label>
                <input type="text" class="form-control" name = "MechanicID" id="MechanicSelect" value="<?php echo $mechanic?>">
                <label for="Time">Time:</label>
                <input type="text" class="form-control" id="Time" name="TheTime" value="<?php echo $time?>">
                <label for="Date">Date:</label>
                <input type="text" class="form-control" id="Date" name="TheDate" value="<?php echo $date?>">
                <label for="TheDescription">Description</label>
                <input type="text" class="form-control" id="TheDescription" name="Description" value="<?php echo $desc?>">
                <input type="submit" name="submit" class="form-control" value="Submit Job"> 
                <input type="submit" name="delete" class="form-control" value="Cancel Booking">
                <input type="submit" name="update" class="form-control" value="Update Job">
            
            </form>
    </div>

    <script>

        function testing(event) {
            event.preventDefault()
            window.location.href = '/thejob.php?BookingID='+event.target.value;
        }

        </script>
</body>

</html>