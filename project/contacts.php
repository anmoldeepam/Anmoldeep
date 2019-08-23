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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $area = $_POST['area'];

    $sql =  "INSERT INTO  details(name,email,area)
VALUES ('$name','$email','$area')";
    if ($conn->query($sql) === TRUE) {
  ?> <script>alert("Your message is received...we'll contact you asap")</script><?php
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contacts.css">
  </head>
  <body>
    <div class="contact">
      <h2>We are always ready to serve you!</h2>
    </div>
    <div class="contact-form">
      <form action="contacts.php" method="post">
        <input type="text" name="name" class="form-control" placeholder="Your Name" required><br>
        <input type="text" name="email" class="form-control" placeholder="Your Email" required><br>
        <textarea name="area" rows="4" class="form-control" placeholder="Message" required></textarea><br>
        <input type="submit" name="submit">
        <center><a href="home.html"><h3>Home Page</h3></a></center>
      </form>
    </div>
  </body>
</html>
