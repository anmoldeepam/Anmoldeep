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
    $date = $_POST['date'];
    $query = "select count(*) from department where DNO = '$id'";
    $execute = mysqli_query($conn,$query);
    $count = mysqli_fetch_row($execute);
    if($count[0] == 1)
    {
      ?><script type="text/javascript">alert("Data Already Exists")</script><?php
    }

    $sql =  "INSERT INTO  department(DNO,D_Name,Mgr_ssn,Mgr_start_date )
VALUES ('$id','$name1','$name2','$date')";
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
body{
  margin: 0;
  padding: 0;
  background: url(grocery13.jpeg);
  background-size: cover;
  background-position: left;
  font-family: sans-serif;
}
</style>
<body>
  <div align = "center">
    <center>
    <form action="deptins.php" method="post">
       <center><h3>Department</h3><br></center>
    Department_id: <input name="id" type="text" required><br><br>
    D_name: <input name="name1" type="text"><br><br>
    Mgr_ssn: <input name="name2" type="text"><br><br>
    Mgr_start_date:<input name="date" type="date"><br><br>
    <input type="submit" name="submit">
  </center>
        </form>
    </div>
<center><h3> <a href="department.php">HOME</a></h3></center>
</body>
</html>
