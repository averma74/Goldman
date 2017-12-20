<?php
$q = $_POST['mv'];
$p = $_POST['t'];
$r = $_POST['m'];

$con = mysqli_connect('localhost','root','','mov');

$sql="SELECT * FROM booking WHERE movie='$r' AND time='$p' AND venue='$q'";

if (!mysqli_query($con,$sql)) {
  die('Error: '.mysqli_error($con));
}
$result=mysqli_query($con,$sql);
echo "<table border='5px' cellpadding='10px' cellspacing='10px' align='center'><tr>";
$c=1;
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
  if($row['status']==1)
  {
	echo "<td bgcolor=red>booked</td>";
  }
  else
  {
  echo "<td bgcolor=green><button onclick='bill(200,$c)'>".$row['seatno']."</button></td>";
  }
  $c=$c++;
  if(($c%5)==0)
  {
  echo "</tr>";
  }
  $c++;
}
echo "</table>";

mysqli_close($con);
?>