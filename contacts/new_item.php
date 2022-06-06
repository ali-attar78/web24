<?php

include "database.php";


$name=$_POST["name"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$phone=$_POST["phone"];

mysqli_query($connection,"INSERT INTO items(name,lastname,email,mobile,phone) Value ('$name','$lastname','$email','$mobile','$phone') ");

header("Location: index.php");

?>