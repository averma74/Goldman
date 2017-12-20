<?php
$con=mysqli_connect("localhost","root","","goldman");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// escape variables for security
$usrname = mysqli_real_escape_string($con, $_POST['userid']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$pass = mysqli_real_escape_string($con, $_POST['pwd']);
$sex = mysqli_real_escape_string($con, $_POST['sex']);
$add= mysqli_real_escape_string($con, $_POST['add']);

$sql="INSERT INTO acc
VALUES ('$usrname', '$pass' ,'$name','$sex','$add','0')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
header("location: Home.php");
mysqli_close($con);
?>
