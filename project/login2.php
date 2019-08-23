<?php
$host = "localhost";
$user = "root";
$password="";
$db = "grocery-master";
$conn = new mysqli($host, $user, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit']))
{
    $no = $_POST['id'];
    $name1 = $_POST['name1'];

    $sql =  "INSERT INTO  login(User,Pass )
VALUES ('$no', '$name1')";
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
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
    width: 200px;
    border: 1px;
    padding: 25px;
    position: center;
    margin: 0px;
}
body{
  margin: ;
  padding: ;
  background: url(grocery30.jpeg);
  background-size:cover;
  background-position: century;
  font-family: sans-serif;
}
</style>
<body>
  <center><div align = "center">
    <form action="login2.php" method="post">
       <h4 style="color:white;">Create a new Account</h4><br>
    <h4 style="color:white;">Username: <input name="id" type="text"><br></h4>
    <h4 style="color:white;">Password: <input name="name1" type="text"><br><br></h4>
    <input type="submit" name="submit">
        </form>
    </div>
  </center>
  <center><h3> <a href="login1.php">HOME</a></h3></center>
</body>
</html>
