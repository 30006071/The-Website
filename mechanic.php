<html>

<head>
    <meta charset="UTF-8">
    <title>Customer</title>
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
    New Mechanic
</div>
<div class="formscentre">
        <form action="insertmechanic.php" name="mechanicform" method="POST" onsubmit="return validatecustomerForm()">
            <div class="form-group">
                <label for="MechanicName"> Mechanic Name:</label>
                <input type="text" class="form-control" id="MechanicID" name="MechanicID" placeholder="Bob Jungles">
                <label for="IRDnum">IRD Number:</label>
                <input type="text" class="form-control" id="IRD" name="IRD" placeholder="123456789">
                <label for="TheEmail">Email:</label>
                <input type="text" class="form-control" id="TheEmail" name="Email" placeholder="bob@gmail.com">
                <input type="submit" value="Submit">
            </div>
        </form>
</div>
</body>
<script src="myformvalidation.js"></script>
</html>