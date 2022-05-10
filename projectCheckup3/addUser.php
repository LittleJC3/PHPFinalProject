<?php
require('requireLogin.php');
require('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $display_name = $_POST['displayname'];
}

$sql = $conn->prepare ("INSERT INTO Login (Username, Password, DisplayName) VALUES (?,?,?)");

$sql->bind_param("sss", $user_name, $password, $display_name);


if ($sql->execute()) {
    echo "New record created successfully <br>";
} else {
    echo "Error: Something went wrong. Try again. <br>";
}
$conn->close();
echo '<a href="Home.php">Home</a>';
echo '<a href="userForm.php">Add Another></a>';

?>