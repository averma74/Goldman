<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("location:Home.php"); // Redirecting To Home Page
}
?>