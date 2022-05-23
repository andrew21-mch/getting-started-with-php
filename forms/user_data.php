
<?php
//extract the content of form posted using their keys
$name = $_POST['name'];
$email = $_POST['useremail'];


// print the extracted values out to the user
echo "NAME: " . $name . "<br>";
echo "EMAIL: " . $email . "<br>";
?>