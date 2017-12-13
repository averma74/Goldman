<!DOCTYPE html>
<html>
<head>
<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "goldman");
$userid=$_SESSION["login"];
function bala()
{
$connection = mysqli_connect("localhost", "root", "", "goldman");
$userid=$_SESSION["login"];
$query = mysqli_query($connection,"select balance from acc where userid='$userid'");
$result=mysqli_fetch_assoc($query);
$balance=$result['balance'];
echo $balance;
}
$query = mysqli_query($connection,"select balance from acc where userid='$userid'");
$result=mysqli_fetch_assoc($query);
$balance=$result['balance'];
//echo $balance;
$_SESSION["bal"]=$balance;
$rows = mysqli_num_rows($query);
if(isset($_GET['deposit']))
	{
		$amt1=$_GET['amount'];
		$depo=$amt1;
		$amt1=$amt1+$balance;
		$sql = "UPDATE acc SET balance='$amt1' WHERE userid='$userid'";
		$sql2="INSERT INTO `transaction`(`amt`, `user`) VALUES ('$depo','$userid')";
		$query1 = mysqli_query($connection,$sql);
		$query4 = mysqli_query($connection,$sql2);
}
else if (isset($_GET['withdraw'])) {
		$amt=$_GET['amount'];
		$depo=$amt;
		$amt=$balance-$amt;

		if($amt<0)
		{
			?><script type="text/javascript">alert("Insufficient balance");</script> <?php
		}
		else
		{
		$sql = "UPDATE acc SET balance='$amt' WHERE userid='$userid'INSERT INTO `transaction`(`amt`, `user`) VALUES ($depo,$userid);";
		$sql4="INSERT INTO `transaction`(`amt`, `user`) VALUES ($depo,$userid)";
		$query5 = mysqli_query($connection,$sql4);	
		$query2 = mysqli_query($connection,$sql);	
		}
}
?>
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
<b id="Menu ">Click here to view Account Summary: <a href="accsum.php">My Account Summary</a></b>
</br></br>
<b id = "bala">Account Balance:<?php bala() ;?></b>
</br></br>
<form method="get" name="myForm" action="">
<input type = "submit" name="deposit" id = "deposit" value = "Deposit Money" >&nbsp;&nbsp;&nbsp;&nbsp;
<input type = "submit" name="withdraw" id = "withdraw" value = "Withdraw Money">
</br></br>
<b id = "test">Enter Amount: </b>
<input type = "textbox" id = "amount" name="amount" >
</form>
</div>
</body>
</html>
