<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashbaord</title>
</head>
<body>
    <?php
    session_start();
    // authenticated user
    if($_SESSION['username'] == "andrew"){
        echo "<h1>Authenticated Page</h1>";
    }
    ?>
</body>
</html>
<?php

