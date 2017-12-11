<?php
include('login.php'); // Includes Login Script
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<script src="jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
			$("#cont").click(function(){
 			$("#cont").addClass("rotator")  ;
				});
				 });
	   </script>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="x1.css">
	</head>
	<body style="">
		<div>
			<nav>
					<ul>
				      <li><a href="AboutU.html">About Us</a></li>
				      <li><a href="Home.php">Home</a></li>
				      <li><a href="reg.html">Register</a></li>
				   </ul>
			</nav>
			<div class="box">
			<div class="flip3d" align="center">
				<div class="front">
					We've transformed the banking experience so you can bank your way
				</div>
				<div class="back">
					<button onclick="login()"><img src="pizz_order.jpg" /></button>
				</div>
			</div>
			<div id="cont" class="cont" align="center">
				<div class="image">
					<div class="bu">LOGIN</div>
				</div>
			<div align="center" id="di1" class="info">
			<form action="" method="post">
			<label>UserName :</label>
			<input id="name" name="username" placeholder="username" type="text">
			<label>Password :</label>
			<input id="password" name="password" placeholder="**********" type="password">
			<input name="submit" type="submit" value=" Login ">
			<span><?php echo $error; ?></span>
			</div>
			</div>
			</div>

		</div>
	</body>
</html>
