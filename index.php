<?php
// include('view.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="mydiv">
        <h1>User Login</h1>
        <form method="post" action="login.php">
            User :<input type="text" name="username">
            Password :<input type="text" name="password">
            <input type="submit" name="submit" value="submit" class="button">
        </form>
    </div>
</body>
</html>