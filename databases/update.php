<?php

include "connect.php";

$sql = "UPDATE Students set full_names='Nancy' where id=2";

if($conn){
    if(mysqli_query($conn, $sql)){
        echo "Done";
    }
    else{
        echo "An Error Occured";
    }
}

/*
Create
Read
Update
Delete
*/
