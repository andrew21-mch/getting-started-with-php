<?php
//include the connection
include 'connect.php';

$sql = "CREATE TABLE Students (
	id INT AUTO_INCREMENT PRIMARY KEY,
	full_names VARCHAR(120) NOT NULL,
	 VARCHAR(32) NOT NULL,
	emaicountryl VARCHAR(60),
	gender VARCHAR(10),
	dob TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if($conn){
    if (mysqli_query($conn, $sql)) {
	echo "Table Students created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
