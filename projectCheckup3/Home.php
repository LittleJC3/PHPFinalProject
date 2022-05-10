<?php
require('requireLogin.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <p> Hello, <?php
        echo $_SESSION['username'];
        ?>. What would you like to do?</p>


</head>
<body>
<br>
<a href="userForm.php">Add a User</a><br>
<a href="videogameForm.php">Add a VideoGame Listing</a><br>
<a href="futureForm.php">Add an Unreleased VideoGame Listing</a><br>

<br>
<a href="retrieveUser.php">View Users</a><br>
<a href="retrieveVideoGame.php">View VideoGame Listings</a><br>
<a href="retrieveUnreleasedGame.php">View Unreleased VideoGames</a><br>



<br><br><br>
<form action="logout.php" method="post">
    <input type="submit" name="submit" value="Logout"/>

</form>



</body>
</html>