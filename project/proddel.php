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

    $sql =  "DELETE FROM product WHERE PID='$no'";
    if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
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
b {
  color: #8b0000;
}

}
</style>
<body>
  <div align = "center">
    <form action="proddel.php" method="post">
       DELETE<br><br>
    <b>Product_NO</b> : <input name="no" type="text"><br><br>
    <input type="submit" name="insert">
        </form>
    </div>
<center><h3> <a href="product.php">HOME</a></h3></center>
</body>
</html>
