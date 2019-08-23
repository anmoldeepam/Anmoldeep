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
          background: url(grocery14.jpeg);
          background-size: cover;
          background-position: center;
          font-family: sans-serif;
        }

    </style>
<body>

    <table width=850; border="5" align="center">
    <caption><h1>PRODUCT DETAILS</h1></caption>
        <tr>
            <th>PID</th>
            <th>PNAME</th>
            <th>SNAME</th>
            <th>SID</th>
            <th>DNO</th>


        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','grocery-master');
            $Query = "SELECT * FROM PRODUCT";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $PID = $Datarows['PID'];
                $P_NAME = $Datarows['P_NAME'];
                $S_NAME = $Datarows['S_NAME'];
                $S_ID = $Datarows['S_ID'];
                $DNO = $Datarows['DNO']



            ?>
        <tr>
        <td><?php echo $PID; ?></td>
        <td><?php echo $P_NAME; ?></td>
        <td><?php echo $S_NAME; ?></td>
        <td><?php echo $S_ID; ?></td>
        <td><?php echo $DNO; ?></td>
                </tr>

    <?php    } ?>
    </table>
    <h3> <a href="product.php">HOME</a></h3>
</body>
</html>
