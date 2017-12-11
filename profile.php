<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "goldman");
$userid=$_SESSION["login"];
$query = mysqli_query($connection,"select balance from acc where userid='$userid'");
	$result=mysqli_fetch_assoc($query);
	$balance=$result['balance'];
//echo $balance;
$_SESSION["bal"]=$balance;
$rows = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script>
function log()
{
 alert("You have logged out");
}
</script>
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $_SESSION['login']; ?></i></b>
<b id="logout"><a href="logout.php" onclick="log()">Log Out</a></b>
</br></br>
<b id="Menu ">Click here to view Account Summary: <a href="men.html">My Account Summary</a></b>
</br></br>
<b id = "balance">Account Balance:<?php echo $balance ?></b>
</br></br>
<input type = "button" id = "deposit" value = "Deposit Money">&nbsp;&nbsp;&nbsp;&nbsp;
<input type = "button" id = "withdraw" value = "Withdraw Money">
</br></br>
<b id = "test">Enter Amount: </b>
<input type = "textbox" id = "amount" >
</div>
</body>
</html>
