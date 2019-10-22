

<!DOCTYPE html>

<html>

    <head>

        <title> PHP SELECT OPTIONS FROM DATABASE </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <!--Method One-->

        <select name = "Customer">
            <?php
            while($rows = $query->fetch_assoc())
            {
                $CustomerID = $rows['CustomerID'];
                echo"<option value='$CustomerID'>$CustomerID</option>";
            }

        ?>
        </select>

    </body>

</html>
