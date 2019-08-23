<!DOCTYPE html>
<html lang="">
<head>
        <title>DISPLAY SUPPLIERS INFO</title>
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
          background: url(grocery21.jpeg);
          background-size: cover;
          background-position: center;
          font-family: sans-serif;
        }

    </style>
<body>

    <table width=850; border="5" align="center">
    <caption><h1>STORAGE DETAILS</h1></caption>
        <tr>
            <th style="color:white;">SNO</th>
            <th style="color:white;">S_TYPE</th>
            <th style="color:white;">P_NAME</th>
            <th style="color:white;">PRODUCT_REMAINING</th>
            <th style="color:white;">S_Phone</th>


        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','grocery-master');
            $Query = "SELECT * FROM SUPPLIERS";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $SID = $Datarows['SID'];
                $S_NAME = $Datarows['S_NAME'];
                $P_NAME = $Datarows['P_NAME'];
                $S_LOCATION = $Datarows['S_LOCATION'];
                $S_PHONE = $Datarows['S_PHONE']

            ?>
        <tr>
        <td style="color:white;"><?php echo $SID; ?></td>
        <td style="color:white;"><?php echo $S_NAME; ?></td>
        <td style="color:white;"><?php echo $P_NAME; ?></td>
        <td style="color:white;"><?php echo $S_LOCATION; ?></td>
        <td style="color:white;"><?php echo $S_PHONE; ?></td>
                </tr>

    <?php    } ?>
    </table>
    <h3> <a href="suppliers.php" style="color:orange;">HOME</a></h3>
</body>
</html>
