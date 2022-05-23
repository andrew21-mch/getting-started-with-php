<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form get</title>
</head>
<body>
    <!--Simple form to get user name and email and submit to user_data.php-->
    <form method="POST" action="user_data.php">
        <label for="name">
            Name: <input type="text" name="name">
        </label> <br>
        <label for="email">
            Email: <input type="email" name="useremail">
        </label><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>