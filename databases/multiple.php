<?php
include 'connect.php';



$query = "INSERT INTO Students (`full_names`, `gender`, `dob`, `country`, `email`) 
                            VALUES ('Kanye','Female', '2020-02-05', 'Gabon', 'l@gmail.com');";
$query .= "INSERT INTO Students (`full_names`, `gender`, `dob`, `country`, `email`) 
         VALUES ('Crete man','Male','2020-02-05', 'Nigeria', 'k@gmail.com');";
        
    if(mysqli_multi_query($conn, $query)){
        echo "Done";
    }else{
        echo "Error";
    }