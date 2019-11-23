<?php

include_once "connect.php";

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $gender = $_POST['gebder'];

    $stmt = "INSERT INTO test (NAME.GENDER) VALUE('$name','$gender')";
        mysqli_query($conn, $stmt);
            header("Location:fetch.php");
            exit();

}