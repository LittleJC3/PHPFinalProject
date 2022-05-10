<?php
require('requireLogin.php');
?>
<!DOCTYPE html>
<html lang="en">

<a href = "Home.php">Home</a></nav> <br/> <br/></nav>
</br>
</br>
<head>
    <meta charset="utf-8">
    <title>Add New Listing</title>
</head>
<body>
<div><p>Create Listing:</p>

    <form action="addVideoGame.php" method="post">


        <input type="text" placeholder="Enter VideoGame Name" name="VGName" size="25" required></p>
        <input type="text" placeholder="Enter Console" name="console" size="25" required ></p>
        <input type="number" placeholder="Enter Price" name="price" size="25" required ></p>
        <input type="text" placeholder="Enter UserName of Lister" name="UNLister" size="25" required ></p>
        <input type="text" placeholder="Enter Description" name="description" size="25" required ></p>
        <br>

        <input type="submit" name="submit" value="Add Listing"/>
    </form>
</div>
</body>
</html>
