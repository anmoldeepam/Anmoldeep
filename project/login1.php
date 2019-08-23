<?php
$host = "localhost";
$user = "root";
$password ="";
$db = "grocery-master";

$conn = new mysqli($host,$user,$password,$db);
if(!$conn){
  die("Connection failed" . mysqli_connect_error());
}
if(isset($_POST['submit'])){
  $user = $_POST['user'];
  $pass = $_POST['pass'];

  $sql = "select Pass from login where User='$user'";

  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)) {
      $auth = $row["Pass"];
    }
  }
  if($auth==$pass)
    header('Location: first.php');
else {
     echo"<script>alert('Invalid Credentials');window.location='login1.php'</script>"; 
}
$conn->close();
}
?>
<html><!DOCTYPE html>
<html lang="">
<head>
  <title>Login page</title>
  <link rel="stylesheet" type="text/css" href="practice.css">
  <br>
</head>
<body>
  <div class="login-box">
    <img src="k.png" class="k">
    <br>
    <h1>login here</h1>
    <form method="post" action="login1.php">
      <p>Username</p>
      <input type="text" name="user" placeholder="Enter username" required>
      <p>Password</p>
      <input type="password" name="pass" placeholder="Enter password" required><br>
      <input type="submit" name="submit" value="submit" href="validation()"><br>
    <center>  <a href="login3.php">Lost your password?</a></center>
      <center><a href="login2.php">Not a user??</a></center><br>
      <center><a href="home.html"><h3>Home Page</h3></a></center>
    </form>
  </div>

</body>
</html>
