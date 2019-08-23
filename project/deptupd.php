<?php
$host = "localhost";
$user = "root";
$password="";
$db = "grocery-master";
$conn = new mysqli($host, $user, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['insert']))
{
    $no = $_POST['no'];
    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
    $date = $_POST['date'];
    $sql =  "UPDATE department SET DNO='$no',D_NAME='$name1',MGR_SSN='$name2',MGR_START_DATE='$date' WHERE DNO='$no'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

}

?>
<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<style>

div{
    background-color: ;
    width: 1000px;
    border: 1px;
    padding: 25px;
    margin: 0px;
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
  <div align = "center">
    <form action="deptupd.php" method="post">
       Update<br><br>
    DNO: <input name="no" type="text" required><br><br>
    Department_name: <input name="name1" type="text"><br><br>
    Manager_Ssn: <input name="name2" type="text"><br><br>
    Manager_Start_Date: <input name="date" type="date"><br><br>

    <input type="submit" name="insert">
        </form>
    </div>
<center><h3> <a href="department.php">HOME</a></h3></center>
</body>
</html>
