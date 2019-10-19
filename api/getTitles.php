<?php
require("dbconnection.php");

$result = $result = $conn->query("SELECT * FROM language");
$titleArrayUK = array();
$titleArrayCN = array();
$titleArrayDK = array();


while($row = $result->fetch_assoc()) 
{
	$titleArrayUK[$row['name']] = $row['text_UK'];
	$titleArrayCN[$row['name']] = $row['text_CN'];
	$titleArrayDK[$row['name']] = $row['text_DK'];
}
  

?>