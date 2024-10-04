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

if (isset($_GET["logoutBtn"])) {
    session_unset();
    session_destroy();
}

if (isset($_GET["loginBtn"])) {
    $username = $_GET['username'];
    $password = $_GET['password'];

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        echo '<h4>' . $_SESSION['username'] . ' is already logged in. Wait for them to log out first!</h4>';
    } else {

        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;

        function randomizePassword($password) {
            $hashed = sha1($password);
            $shuffled = str_shuffle($hashed);
            $randomizedCode = substr($shuffled, 0, 30);

            return $randomizedCode;
        }

        $randomizedPassword = randomizePassword($password);

        echo '<h4>Username: ' .$username. '</h4>';
        echo '<h4>Password: ' . $randomizedPassword . '</h4>';
    }
}
?>
