<?php
require('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_name = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT Username, Password FROM `Login` WHERE Username = '" . $user_name . "' AND Password = '" . $password . "';";

    $loginResults = $conn->query($sql);

    if ($loginResults->num_rows > 0){

        session_start();
        $_SESSION['username'] = $user_name;
        $_SESSION['isLoggedIn'] = true;

        header("Location: Home.php");

    } else {
        header("Location: form.php");
    }
    $conn->close();

}



?>

