<?php 
require("dbconnection.php");
$foodItemQuery = "select * from foodItem";
$foodItemResult = mysqli_query($conn,$foodItemQuery);
?>  