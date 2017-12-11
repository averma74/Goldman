<?php
$con=mysqli_connect("localhost","root","","piz_serv");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// escape variables for security
$usrname = mysqli_real_escape_string($con, $_POST['name']);
$no = mysqli_real_escape_string($con, $_POST['userid']);
$pass = mysqli_real_escape_string($con, $_POST['pwd']);
$sex = mysqli_real_escape_string($con, $_POST['sex']);
$add= mysqli_real_escape_string($con, $_POST['add']);

$sql="INSERT INTO acc
VALUES ('$usrname', '$no', '$pass','$sex','$add')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
header("location: Home.php");
mysqli_close($con);
?>
