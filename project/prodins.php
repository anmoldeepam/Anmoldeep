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
    $id = $_POST['id'];
    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
    $sid = $_POST['id1'];
    $dno = $_POST['id2'];
    $query = "select count(*) from product where PID = '$id'";
    $execute = mysqli_query($conn,$query);
    $count = mysqli_fetch_row($execute);
    if($count[0] == 1)
    {
      ?><script type="text/javascript">alert("Data Already Exists")</script><?php
    }

    $sql =  "INSERT INTO  product(PID,P_NAME,S_NAME,S_ID,DNO )
VALUES ('$id','$name1','$name2','$sid','$dno')";
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
    background-color: ;
    width: 1000px;
    border: 1px;
    padding: 25px;
    margin: 0px;
}
h3{
  color:#ffa500;
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
    <form action="prodins.php" method="post">
       <h3>Product</h3><br>
    Product_id: <input name="id" type="text" required><br><br>
Product_name: <input name="name1" type="text"><br><br>
    S_name: <input name="name2" type="text"><br><br>
    Sid:<input name="id1" type="text"><br><br>
    Dno: <input name="id2" type="text"><br><br>
    <input type="submit" name="submit">
        </form>
    </div>
<center><h3> <a href="product.php">HOME</a></h3></center>
</body>
</html>
