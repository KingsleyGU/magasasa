<?php
require("dbconnection.php");

$result = $result = $conn->query("SELECT * FROM combo");
// $result = mysql_query("SELECT * FROM titles");
$comboNameArray = array();
$comboUrlArray = array();

while($row = $result->fetch_assoc()) 
  {
  	array_push($comboNameArray,$row['name']);
  	array_push($comboUrlArray,$row['img_url']);
  }

?>