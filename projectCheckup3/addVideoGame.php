<?php
require('requireLogin.php');
require('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $videogame= $_POST['VGName'];
    $console = $_POST['console'];
    $price = $_POST['price'];
    $username = $_POST['UNLister'];
    $description = $_POST['description'];

}

$sql = $conn->prepare("INSERT INTO VideoGame (VideoGame, Console, Price, PostedBy, Description) VALUES (?,?,?,?,?)");

$sql->bind_param("ssiss", $videogame, $console, $price, $username, $description);


if ($sql->execute()) {
    echo "New record created successfully <br>";
} else {
    echo "Error: Something went wrong. Try again. <br>";
}
$conn->close();
echo '<a href="Home.php">Home</a>';
echo '<a href="videogameForm.php">Add Another></a>';

