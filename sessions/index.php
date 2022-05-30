<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
    <h1>HEllo WOrld</h1>
<?php
// Set session variables
$_SESSION["username"] = "andrew";
$_SESSION["role"] = "admin";

//modify the session variables
$_SESSION["username"] = "james";
$_SESSION["role"] = "user";


?>
</body>
</html>