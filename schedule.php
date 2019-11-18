<?php
include("inserttoschedule.php");

    // Initialize the session

    session_start();

     

    // If session variable is not set it will redirect to login page

    if(!isset($_SESSION['username']) || empty($_SESSION['username'])){

      header("location: login.php");

      exit;

    }
    $showbuttons= false;
    if($_SESSION['username']=='theadmin')
    {
        $showbuttons = true;
    }

    $currentDate = date('d-m-Y');
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
    Schedule
    </div>
    <input class = "datebutton buttondate" type=button onClick="parent.location='prevwork.php'" value="<?php echo $currentDate; ?>">
    
        <!-- <form class="schedulesearch" action="searchscedule.php" method="post">  
            <input type="text" name="valueToSearch" placeholder=""><br><br>
            <input type="submit" name="search" value="Search" class="Centrestuff"><br><br>
        </form> -->
        <div <?php if ($showbuttons===false){?>style="margin-left: 20%;"<?php } ?>>
        <div class = "schedulebox">
            <table class="mystable" onClick="parent.location='thejob.php'" value="Job" >
                    <th>ID</th>
                    <th>Time</th>
                    <th>CustomerID</th>
                    <th>Rego</th>
                    <th>Description</th>
                    <th>Mechanic</th>
                    <?php while($row = mysqli_fetch_array($query)):?> 
                <tr>
                    <td><?php echo $row['BookingID'];?></td>
                    <td><?php echo $row['TheTime'];?></td>
                    <td><?php echo $row['CustomerID'];?></td>
                    <td><?php echo $row['Rego'];?></td>
                    <td><?php echo $row['Description'];?></td>
                    <td><?php echo $row['Mechanic'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </div>
        </div>
        <div <?php if ($showbuttons===false){?>style="display:none"<?php } ?>>
            <input type=button class="button button1" onClick="parent.location='customer.php'" value="New Customer">
            <input type=button class="button button2" onClick="parent.location='booking.php'" value="New Booking">
            <input type=button class="button button3" onClick="parent.location='prevwork.php'" value="Previous Work">
            
        </div>
                <input type=button class="button buttonlogout" onClick="parent.location='logout.php'" value="Logout">
        
</body>

</html>