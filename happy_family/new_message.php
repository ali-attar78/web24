<?php

include "database.php";


$name=$_POST["name"];
$text=$_POST["text"];

mysqli_query($connection,"INSERT INTO messages(name,text) Value ('$name','$text') ");

header("Location: index.php");

?>