<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals Activity</title>
</head>
<body>
    <form action="index.php" method="GET"> 
        <p><label for="username">Username</label>
        <input type="text" name="username" size="5" maxlength="30" style="width: 20%"></p>
        <p><label for="password">Password</label>
        <input type="password" name="password" size="5" maxlength="30" style="width: 20%"></p>

        <p><input type="submit" name="loginBtn" value="Login"></p>
        <p><input type="submit" name="logoutBtn" value="Logout"></p>
    </form>
</body>
</html>

<?php 
    session_start();
    if(isset($_GET["loginBtn"])) {

        $username = $_GET['username'];
        $password = $_GET['password'];

        echo '<H3> User logged in: '.$username.'</H3>';
        echo  '<H3> Password: '.$password.'</H3>';
    }
?>