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
    $name2 = $_POST['name2'];
    $name3 = $_POST['name3'];
    $Cphone = $_POST['phone'];
  $Cpoints = $_POST['points'];
$query = "select count(*) from customer where CID = '$no'";
$execute = mysqli_query($conn,$query);
$count = mysqli_fetch_row($execute);
if($count[0] == 1)
{
  ?><script type="text/javascript">alert("Data Already Exists")</script><?php
}

    $sql =  "INSERT INTO  customer(CID,C_Fname,C_minid,C_Lname,C_Phone,C_Points )
VALUES ('$no', '$name1', '$name2','$name3',$Cphone,$Cpoints)";
    if ($conn->query($sql) === TRUE) {
    ?><script type="text/javascript">alert("Record inserted Successfully")</script><?php
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
  margin: 0;
  padding: 0;
  background: url(grocery14.jpeg);
  background-size: cover;
  background-position: center;
  font-family: sans-serif;
}
</style>
<body>
  <center><div align = "center">
    <form action="custins.php" method="post">
       Customer<br><br>
    Customer_id: <input name="id" type="text" required><br><br>
    Fname: <input name="name1" type="text" required><br><br>
    Cminid: <input name="name2" type="text"><br><br>
    Clname:<input name="name3" type="text"><br><br>
    Cphone:<input name="phone" type="text" required><br><br>
    Cpoints:<input name="points" type="text"><br><br>
    <input type="submit" name="submit">
        </form>
    </div>
  </center>
<center><h3> <a href="customer.php">HOME</a></h3></center>
</body>
</html>
