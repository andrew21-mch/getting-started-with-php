<?php
include 'connect.php';

//sql statement
$sql = "INSERT INTO Students (`full_names`, `email`, `gender`, `country`, `dob`) 
        VALUES (?, ?, ?, ?, ?);";

// prepare and bind
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $full_names, $email, $gender, $country, $dob);


// set parameters and execute
$full_names = "Mercy Amaka";
$email = "amaka@gmail.com";
$gender = "Female";
$country = "Nigeria";
$dob = "2000-05-09";

//execute statement
$stmt->execute();

echo "New records created successfully";
$stmt->close();
$conn->close();
?>