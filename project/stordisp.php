<!DOCTYPE html>
<html lang="">
<head>
        <title>DISPLAY GROUPS INFO</title>
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
          background: url(grocery20.jpeg);
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


        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','grocery-master');
            $Query = "SELECT * FROM STORAGE";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $SNO = $Datarows['SNO'];
                $S_TYPE = $Datarows['S_TYPE'];
                $P_NAME = $Datarows['P_NAME'];
                $PRODUCT_REMAINING = $Datarows['PRODUCT_REMAINING'];

            ?>
        <tr>
        <td style="color:white;"><?php echo $SNO; ?></td>
        <td style="color:white;"><?php echo $S_TYPE; ?></td>
        <td style="color:white;"><?php echo $P_NAME; ?></td>
        <td style="color:white;"><?php echo $PRODUCT_REMAINING; ?></td>
                </tr>

    <?php    } ?>
    </table>
    <h3> <a href="storage.php">HOME</a></h3>
</body>
</html>
