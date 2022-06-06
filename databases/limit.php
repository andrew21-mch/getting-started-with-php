<?php
//include the connection
include 'connect.php';

$sql = "SELECT * from Students LIMIT 3";
if($conn){
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while($data = mysqli_fetch_assoc($result)){
            //show data
            echo "\n";
            echo $data['id'] . " " . $data['full_names'] . " " . $data['email'] . " ". $data['gender'] . " " . $data['country'] . "\n";
        }
    }
}
