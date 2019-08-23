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

    $sql =  "UPDATE storage SET SNO='$no',S_TYPE='$name1',P_NAME='$name2',PRODUCT_REMAINING='$name3' WHERE SNO='$no'";

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
    <form action="storupd.php" method="post">
       Update<br><br>
    S_No: <input name="no" type="text" required><br><br>
    S_type: <input name="name1" type="text"><br><br>
    P_name: <input name="name2" type="text"><br><br>
    Product_Rem...ing: <input name="name3" type="text"><br><br>

    <input type="submit" name="insert">
        </form>
    </div>
<center><h3> <a href="storage.php">HOME</a></h3></center>
</body>
</html>
