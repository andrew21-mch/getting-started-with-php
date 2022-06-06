<?php
//include the connection
include 'connect.php';

$sql = "DELETE from Students where id=1";
if($conn){
    if (mysqli_query($conn, $sql)) {
	echo "Student successfully Deleted";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
