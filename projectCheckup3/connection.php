<?php
$servername = "localhost";
$username = "ciullajn_checkupAdmin";
$password = "IAmTheAdmin";
$databaseName = "ciullajn_semesterProjectCheckup2";


$conn = new mysqli($servername, $username, $password, $databaseName);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

?>