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
  $name3 = $_POST['name3'];
  $name4 = $_POST['name4'];
  $no = $_POST['no'];
  $id2 = $_POST['id2'];
  $id3 = $_POST['id3'];

    $sql =  "UPDATE staff SET ST_NAME='$name1',ST_MINID='$name2',St_LNAME='$name3',ST_DESIGNATION='$name4',SALARY='$no',DNO='$id2',SUPER_STID='$id3' WHERE ST_ID='$id'";

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
    <form action="stafupd.php" method="post">
       Update<br><br>
         St_id: <input name="id" type="text" required><br><br>
       St_Fname:<input name="name1" type="text"><br><br>
      St_minid: <input name="name2" type="text"><br><br>
      St_Lname: <input name="name3" type="text"><br><br>
St_Designation: <input name="name4" type="text"><br><br>
         Salary:<input name="no" type="text"><br><br>
            DNO:<input name="id2" type="text"><br><br>
    Super_stid: <input name="id3" type="text"><br><br>

    <input type="submit" name="insert">
        </form>
    </div>
 <center><h3> <a href="staff.php">HOME</a></h3></center>
</body>
</html>
