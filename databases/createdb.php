<?php
//include the connection
include 'connect.php';

//create database query
$sql = "CREATE DATABASE zuriphp";

if($conn){
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } else {
    echo "Error creating database: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    }

?>
