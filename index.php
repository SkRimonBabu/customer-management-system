<?php
session_start();

$_SESSION['user'] = 'admin';
$_SESSION['password'] = '00000';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="form.php" method="POST">
            <input type="text" name="user" placeholder="User Name"><br>
            <input type="password" name="password" placeholder="password"><br>
            <input type="submit" name="submit" value="btn">
        </form>
    </body>
</html>
