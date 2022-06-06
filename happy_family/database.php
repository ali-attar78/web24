<?php

$connection = mysqli_connect("localhost" , "root", "", "happy_family");

mysqli_query($connection,"SET CHARACTER SET UTF8");

if (mysqli_connect_errno() == 0) {

} else {
    echo "خطایی رخ داده است";
    print(mysqli_connect_error());
}

