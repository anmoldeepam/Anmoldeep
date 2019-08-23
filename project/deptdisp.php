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
          background: url(grocery19.jpeg);
          background-size: cover;
          background-position: canvas;
          font-family: sans-serif;
        }

    </style>
<body>

    <table width=850; border="5" align="center">
    <caption><h1>DEPARTMENT DETAILS</h1></caption>
        <tr>
            <th>DNO</th>
            <th>DNAME</th>
            <th>MGR_SSN</th>
            <th>MGR_START_DATE</th>


        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','grocery-master');
            $Query = "SELECT * FROM DEPARTMENT";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $DNO = $Datarows['DNO'];
                $D_Name = $Datarows['D_Name'];
                $Mgr_ssn = $Datarows['Mgr_ssn'];
                $Mgr_start_date = $Datarows['Mgr_start_date'];



            ?>
        <tr>
        <td style="color:white;"><?php echo $DNO; ?></td>
        <td style="color:white;"><?php echo $D_Name; ?></td>
        <td style="color:white;"><?php echo $Mgr_ssn; ?></td>
        <td style="color:white;"><?php echo $Mgr_start_date; ?></td>
                </tr>

    <?php    } ?>
    </table>
    <h3> <a href="department.php">HOME</a></h3>
</body>
</html>
