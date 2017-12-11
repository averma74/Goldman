<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$connection = mysqli_connect("localhost", "root", "", "piz_serv");
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);
// Establishing Connection with Server by passing server_name, user_id and password as a parameter

// Selecting Database
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"select * from acc where pwd='$password' AND userid='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION["login"]=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($connection); // Closing Connection
}
}
?>
