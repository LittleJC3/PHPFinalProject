<?php
require('requireLogin.php');
require('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $URGvideogame= $_POST['URGGame'];
    $URGconsole = $_POST['URGConsole'];
    $URGreleasedate = $_POST['URGReleaseDate'];
    $URGdescription = $_POST['URGDescription'];


}

$sql = $conn->prepare("INSERT INTO UnreleasedGame (UnreleasedGame, Console, ReleaseDate, Description) VALUES (?,?,?,?)");

$sql->bind_param("ssss", $URGvideogame, $URGconsole, $URGreleasedate, $URGdescription);


if ($sql->execute()) {
    echo "New record created successfully <br>";
} else {
    echo "Error: Something went wrong. Try again. <br>";
}
$conn->close();
echo '<a href="Home.php">Home</a>';
echo '<a href="futureForm.php">Add Another></a>';

