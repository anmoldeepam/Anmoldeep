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
    $name3 = $_POST['name3'];
    $name4 = $_POST['name4'];
    $no = $_POST['no'];
    $id2 = $_POST['id2'];
    $id3 = $_POST['id3'];
    $query = "select count(*) from staff where ST_ID = '$id'";
    $execute = mysqli_query($conn,$query);
    $count = mysqli_fetch_row($execute);
    if($count[0] == 1)
    {
      ?><script type="text/javascript">alert("Data Already Exists")</script><?php
    }

    $sql =  "INSERT INTO  staff(ST_ID,ST_NAME,ST_MINID,ST_LNAME,ST_DESIGNATION,SALARY,DNO,SUPER_STID)
VALUES ('$id','$name1','$name2','$name3','$name4','$no','$id2','$id3')";
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
    <form action="stafins.php" method="post">
       <h3>Staff</h3><br>
    St_id: <input name="id" type="text" required><br><br>
    St_Fname: <input name="name1" type="text" required><br><br>
    St_minid: <input name="name2" type="text"><br><br>
    St_Lname: <input name="name3" type="text"><br><br>
St_Designation: <input name="name4" type="text" required><br><br>
    Salary:<input name="no" type="text" required><br><br>
    DNO:<input name="id2" type="text" required><br><br>
    Super_stid: <input name="id3" type="text"><br><br>
    <input type="submit" name="submit">
        </form>
    </div>
<center><h3> <a href="staff.php">HOME</a></h3></center>
</body>
</html>
