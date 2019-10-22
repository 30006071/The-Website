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
    <form action="FinaliseBooking.php" method="POST">
        <div class = "schedulebox">
            <div class="grid-container">
                <div class="item a" >9:00</div>
                <div class="item b">Rego:<br>GET<br>Customer:<br>GET</div>
                <div class="item c">Job description: Fit and Balance 4 new tyres and check over vehcile oil leak</div>
                <div class="item d">Mechanic: James A, Andy E</div>
                <div class="item e"></div>
                <div class="item f"></div>
                <div class="item g"></div>
                <div class="item h"></div>
                <div class="item i"></div>
                <div class="item g"></div>
                <div class="item h"></div>
                <div class="item i"></div>
                <div class="item a">9:00</div>
                <div class="item b">Rego:<br>GET<br>Customer:<br>GET</div>
                <div class="item c">Job description: Fit and Balance 4 new tyres and check over vehcile oil leak</div>
                <div class="item d">Mechanic: James A, Andy E</div>
                <div class="item e"></div>
                <div class="item f"></div>
                <div class="item g"></div>
                <div class="item h"></div>
                <div class="item i"></div>
                <div class="item g"></div>
                <div class="item h"></div>
                <div class="item i"></div>
                <div class="item a">9:00</div>
                <div class="item b">Rego:<br>GET<br>Customer:<br>GET</div>
                <div class="item c">Job description: Fit and Balance 4 new tyres and check over vehcile oil leak</div>
                <div class="item d">Mechanic: James A, Andy E</div>
                <div class="item e"></div>
                <div class="item f"></div>
                <div class="item g"></div>
                <div class="item h"></div>
                <div class="item i"></div>
                <div class="item g"></div>
                <div class="item h"></div>
                <div class="item i"></div>
            </div>
        </div>
    </form>
            <input type=button class="button button1" onClick="parent.location='customer.php'" value="New Customer">
            <input type=button class="button button2" onClick="parent.location='booking.php'" value="New Booking">
            <input type=button class="button button3" onClick="parent.location='prevwork.php'" value="Previous Work">
            <input type=button class="button buttonlogout" onClick="parent.location='logout.php'" value="Logout">
</body>

</html>