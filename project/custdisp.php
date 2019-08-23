<!DOCTYPE html>
<html lang="">
<head>
        <title>DISPLAY CUSTOMER INFO</title>
</head>
    <style>
        html, body {
    margin: 0;
    padding: 0;
    width: 100%;
}
body{
    width: 100%;
    height: 100vh;
    background: url();
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    display: table;
    font-family: sans-serif;
}
        table {
            padding: 5px;
            text-align: center;
            font-size: 20px;
        }
        h3 {
            margin-left: 75%;
        }
        body{
          margin: 0;
          padding: 0;
          background: url(grocery32.lpeg.jpg);
          background-size: cover;
          background-position: center;
          font-family: sans-serif;
        }

    </style>
<body>

    <table width=850; border="5" align="center">
    <caption><h1 style="color:white;">CUSTOMER DETAILS</h1></caption>
        <tr>
            <th style="color:white;">CID</th>
            <th style="color:white;">C_FNAME</th>
            <th style="color:white;">C_MINID</th>
            <th style="color:white;">C_LNAME</th>
            <th style="color:white;">C_PHONE</th>
            <th style="color:white;">C_POINTS</th>


        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','grocery-master');
            $Query = "SELECT * FROM CUSTOMER";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $CID = $Datarows['CID'];
                $C_FNAME = $Datarows['C_FNAME'];
                $C_MINID = $Datarows['C_MINID'];
                $C_LNAME = $Datarows['C_LNAME'];
                $C_PHONE = $Datarows['C_PHONE'];
                $C_POINTS = $Datarows['C_POINTS'];



            ?>

        <tr>
        <td style="color:white;"><?php echo $CID; ?></td>
        <td style="color:white;"><?php echo $C_FNAME; ?></td>
        <td style="color:white;"><?php echo $C_MINID; ?></td>
        <td style="color:white;"><?php echo $C_LNAME; ?></td>
        <td style="color:white;"><?php echo $C_PHONE; ?></td>
        <td style="color:white;"><?php echo $C_POINTS; ?></td>
                </tr>

    <?php    } ?>
    </table>
    <h3> <a href="customer.php">HOME</a></h3>
</body>
</html>
