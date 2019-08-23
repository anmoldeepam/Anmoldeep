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
    $name3 = $_POST['name3'];
    $phone = $_POST['phone'];
    $points = $_POST['points'];
    $sql =  "UPDATE customer SET C_fname='$name1',C_minid='$name2',C_lname='$name3',c_phone=$phone,c_points='$points' WHERE cid='$no'";

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
    background-color:;
    border: 1px ;
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
    <form action="custupd.php" method="post">
       Update<br><br>
    Cid: <input name="no" type="text" required><br><br>
    Customer fname: <input name="name1" type="text"><br><br>
    Customer m_init: <input name="name2" type="text"><br><br>
    Customer lname: <input name="name3" type="text"><br><br>
    Customer phone: <input name="phone" type="text"><br><br>
    Customer points: <input name="points" type="text"><br><br>

    <input type="submit" name="insert">
        </form>
    </div>
<center><h3> <a href="customer.php">HOME</a></h3></center>
</body>
</html>
