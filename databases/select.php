<?php
//query the database in php
include 'connect.php';

$sql = "SELECT * FROM Students ORDER BY email";
$result = mysqli_query($conn, $sql);

//display result
if(mysqli_num_rows($result) > 0){
    while($data = mysqli_fetch_assoc($result)){
        //show data
        echo "\n";
        echo $data['id'] . " " . $data['full_names'] . " " . $data['email'] . " ". $data['gender'] . " " . $data['country'] . "\n";
    }
}

//insert data into the database




