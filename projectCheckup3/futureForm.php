<?php

require('requireLogin.php');
?>
<!DOCTYPE html>
<html lang="en">

<a href="Home.php">Home</a></nav> <br/> <br/></nav>
</br>
</br>
<head>
    <meta charset="utf-8">
    <title>Add Unreleased VideoGame</title>
</head>
<body>
<div><p>Create Unreleased Game Listing:</p>

    <form action="addFutureGame.php" method="post">


        <input type="text" placeholder="Enter VideoGame Name" name="URGGame" size="25" required></p>
        <input type="text" placeholder="Enter Console" name="URGConsole" size="25" required></p>
        <input type="date" placeholder="Enter Release Date" name="URGReleaseDate" size="25" required></p>
        <input type="text" placeholder="Enter Description" name="URGDescription" size="25" required></p>
        <br>

        <input type="submit" name="submit" value="Add Unreleased Listing"/>
    </form>
</div>
</body>
</html>
