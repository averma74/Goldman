<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
   <title>Account summary</title>
</head>
<body>
<?php
   session_start();
   $connection = mysqli_connect("localhost", "root", "", "goldman");
   $userid=$_SESSION["login"];
   $balance=$_SESSION["bal"];
   // Retrieve data from Query String
   //$age = $_GET['age'];
   
   // Escape User Input to help prevent SQL Injection
  // $age = mysql_real_escape_string($age);
   
   //build query
   $query = "SELECT * FROM transaction WHERE user = '$userid' ORDER BY  time DESC";
   
   //Execute query
   $qry_result = mysqli_query($connection, $query);
   
   //Build Result String
   $display_string = "<table class=\"table\">";
   $display_string .= "<thead class=\"thead-dark\">";
   $display_string .= "<tr>";
   $display_string .= "<th>TID</th>";
   $display_string .= "<th>Amount</th>";
   $display_string .= "<th>userid</th>";
   $display_string .= "<th>time</th>";
   $display_string .= "</thead>";
   $display_string .= "</tr>";
   
   // Insert a new row in the table for each person returned
   while($row = mysqli_fetch_array($qry_result)) {
      $display_string .= "<tr>";
      $display_string .= "<td>$row[id]</td>";
      $display_string .= "<td>$row[amt]</td>";
      $display_string .= "<td>$row[user]</td>";
      $display_string .= "<td>$row[time]</td>";
      $display_string .= "</tr>";
   }
  // echo "Query: " . $query . "<br />";
   
   $display_string .= "</table>";
   echo $display_string;
?>
</body>
</html>