<?php
    include("searchdb.php");
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>JobHistory</title>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class = "scheduletitle">
    Job History
</div>
<div class="formscentre">
<form action="prevwork.php" method="post">  
            <input type="text" name="valueToSearch" placeholder=""><br><br>
            <input type="submit" name="search" value="Search" class="Centrestuff"><br><br>
            <div class="table-wrap">
            <table>
                <tr>
                <th>Date</th>
                    <th>CustomerID</th>
                    <th>Rego</th>
                    <th>Description</th>
                    <th>Mechanic</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                
                <tr>
                <td><?php echo $row['TheDate'];?></td>
                <td><?php echo $row['CustomerID'];?></td>
                    <td><?php echo $row['Rego'];?></td>
                    <td><?php echo $row['Description'];?></td>
                    <td><?php echo $row['Mechanic'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
            </div>
        </form>
        <input type=button class ="returnbutton" onClick="parent.location='schedule.php?DateID=2019-11-20'" value="Return To Schedule">
</div>
</body>

</html>

