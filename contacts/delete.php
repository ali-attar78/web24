<?php 

include "database.php";

$delete=$_POST["yes"];

mysqli_query($connection,"DELETE FROM items");

header("Location: index.php");

?>