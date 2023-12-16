<?php

$severName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "car_user";

$conn = mysqli_connect($severName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    #die("Connection failed ... " . mysqli_connect_error());
    echo "<script> alert('Connection failed.') </script>";
} else {
    #test if the connection is successfull...
    echo "<script> alert('Connection succcessful.') </script>";
}
