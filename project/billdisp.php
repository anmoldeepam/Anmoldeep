<!DOCTYPE html>
<html lang="">
<head>
        <title>DISPLAY BILLING INFO</title>
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
    background: url(grocery18.jpeg);
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
          background: url(grocery22.jpeg);
          background-size: cover;
          background-position: center;
          font-family: sans-serif;
        }

    </style>
<body>

    <table width=850; border="5" align="center">
    <caption><h1>BILLING DETAILS</h1></caption>
        <tr>
            <th style="color:white;">CID</th>
            <th style="color:white;">PRODUCT_PURCHASED</th>
            <th style="color:white;">TOTAL</th>



        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','grocery-master');
            $Query = "SELECT * FROM BILLING";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $CID = $Datarows['CID'];
                $PRODUCT_PURCHASED = $Datarows['PRODUCT_PURCHASED'];
                $TOTAL = $Datarows['TOTAL'];

            ?>
        <tr>
        <td style="color:white;"><?php echo $CID; ?></td>
        <td style="color:white;"><?php echo $PRODUCT_PURCHASED; ?></td>
        <td style="color:white;"><?php echo $TOTAL; ?></td>
                </tr>

    <?php    } ?>
    </table>
    <h3> <a href="billing.php">HOME</a></h3>
</body>
</html>
