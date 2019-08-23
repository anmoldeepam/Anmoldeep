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
    $id = $_POST['id'];
    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
    $id = $_POST['id'];
    $no = $_POST['no'];

  $sql =  "UPDATE product SET PID='$id',P_NAME='$name1',S_NAME='$name2',S_ID='$id',DNO='$no' WHERE PID='$id'";

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
    <form action="produpd.php" method="post">
       Update<br><br>
    PID: <input name="id" type="text" required><br><br>
    P_NAME: <input name="name1" type="text"><br><br>
    S_NAME: <input name="name2" type="text"><br><br>
    SID: <input name="id" type="text"><br><br>
    DNO: <input name="no" type="text"><br><br>

    <input type="submit" name="insert">
        </form>
    </div>
 <center><h3> <a href="product.php">HOME</a></h3></center>
</body>
</html>
