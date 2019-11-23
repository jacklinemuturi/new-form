<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$databasename   = "jackie";

$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $databasename
);

if (!$conn){
    echo "Not connected!";
}else{
   // echo "connected";
}