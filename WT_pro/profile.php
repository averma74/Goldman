<?php
session_start();
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
<b id = "balance">Account Balance: 12345$</b>
</br></br>
<input type = "button" id = "deposit" value = "Deposit Money">&nbsp;&nbsp;&nbsp;&nbsp;
<input type = "button" id = "withdraw" value = "Withdraw Money">
</br></br>
<b id = "test">Enter Amount: </b>
<input type = "textbox" id = "amount" >
</div>
</body>
</html>
