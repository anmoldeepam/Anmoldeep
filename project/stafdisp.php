<!DOCTYPE html>
<html lang="">
<head>
        <title>DISPLAY STAFF INFO</title>
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
          background: url(grocery9.jpeg);
          background-size: cover;
          background-position: center;
          font-family: sans-serif;
        }

    </style>
<body>

    <table width=850; border="5" align="center">
    <caption><h1 style="color:white;">STAFF DETAILS</h1></caption>
        <tr>
            <th style="color:white;">ST_ID</th>
            <th style="color:white;">P_FNAME</th>
            <th style="color:white;">P_MINID</th>
            <th style="color:white;">ST_LNAME</th>
            <th style="color:white;">ST_DESIGNATION</th>
            <th style="color:white;">SALARY</th>
            <th style="color:white;">DNO</th>
            <th style="color:white;">SUPER_STID</th>


        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','grocery-master');
            $Query = "SELECT * FROM STAFF";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $ST_ID = $Datarows['ST_ID'];
                $ST_NAME = $Datarows['ST_NAME'];
                $ST_MINID = $Datarows['ST_MINID'];
                $ST_LNAME = $Datarows['ST_LNAME'];
                $ST_DESIGNATION = $Datarows['ST_DESIGNATION'];
                $SALARY = $Datarows['SALARY'];
                $DNO = $Datarows['DNO'];
                $SUPER_STID = $Datarows['SUPER_STID'];

            ?>
        <tr>
          <td style="color:white;"><?php echo $ST_ID; ?></td>
          <td style="color:white;"><?php echo $ST_NAME; ?></td>
          <td style="color:white;"><?php echo $ST_MINID; ?></td>
          <td style="color:white;"><?php echo $ST_LNAME; ?></td>
          <td style="color:white;"><?php echo $ST_DESIGNATION; ?></td>
          <td style="color:white;"><?php echo $SALARY; ?></td>
          <td style="color:white;"><?php echo $DNO; ?></td>
          <td style="color:white;"><?php echo $SUPER_STID; ?></td>
        </tr>

    <?php    } ?>
    </table>
    <h3> <a href="staff.php">HOME</a></h3>
</body>
</html>
