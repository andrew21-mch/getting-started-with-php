<?php
// conecting to a dabase
//define credentials
$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "zuriphp";
$conn = mysqli_connect($host, $user, $password, $db);
if(!$conn){
    die("Database connection failed: ");
}
else{
    echo "Connected to database successfully";
}



?>
