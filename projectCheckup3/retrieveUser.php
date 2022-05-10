<?php
require('requireLogin.php');
require('connection.php');

$servername = "localhost";
$username = "ciullajn_checkupAdmin";
$password = "IAmTheAdmin";
$databaseName = "ciullajn_semesterProjectCheckup2";


$conn = new mysqli($servername, $username, $password, $databaseName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql =  ("SELECT * FROM `Login`");

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "Login ID: " . $row['LoginID'] . " | ";
        echo "Username: " . $row['Username'] . " | ";
        echo "Password: " . $row['Password'] . " | ";
        echo "Display Name: " . $row['DisplayName'] . " | ";
        echo "<br><br>";
    }
} else {
    echo "0 results";
}
$conn->close();

echo '<a href="Home.php">Home</a>'
?>

