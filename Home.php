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
		<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="x1.css">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

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
			<div class="container-fluid box">
						<div class="row flip3d" >
									<div class="col-xl text-center front"><h1 class="display-4">
										We've transformed the banking experience so you can bank your way
									</h1>
									</div>
									<div class="back">
										<button onclick="login()"><img src="pizz_order.jpg" /></button>
									</div>
								</div>
						<div id="cont" class="container col align-self-center cont" >
								<div class="image">
									<div class="btn btn-primary bu">LOGIN</div>
								</div>
								
									<div id="di1" class="container info">
										<div class="container form-group">
											<form method="POST">
					    					<label for="exampleInputEmail1">User ID</label>
					    					<input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter email">
					    					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					    					<label for="exampleInputPassword1">Password</label>
										    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
										    	<br>
										    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
										    <span><?php echo $error; ?></span>
										</form>
										</div>
							
							</div>
						</div>
				</div>
	</body>
</html>
