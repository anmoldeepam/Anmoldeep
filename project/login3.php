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
    $sql =  "UPDATE login SET Pass='$name1' WHERE User='$no'";

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
  background: url(grocery.jpeg);
  background-size: cover;
  background-position: center;
  font-family: sans-serif;
}
</style>
<body>
  <div align = "center">
    <form action="login3.php" method="post">
       Re-Enter your Username with new Password<br><br>
    Username: <input name="no" type="text"><br><br>
    Password: <input name="name1" type="text"><br><br>

    <input type="submit" name="insert">
        </form>
    </div>
<center><h3> <a href="login1.php">HOME</a></h3></center>
</body>
</html>
