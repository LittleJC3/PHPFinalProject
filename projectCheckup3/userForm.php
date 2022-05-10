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
    <title>Add User</title>
</head>
<body>
<div><p>Create User:</p>

    <form action="addUser.php" method="post">


        <input type="text" placeholder="Enter Username" name="username" size="20" required></p>
        <input type="password" placeholder="Enter Password" name="password" size="20" required ></p>
        <input type="text" placeholder="Enter Displayname" name="displayname" size="20" required ></p>
        <br>

        <input type="submit" name="submit" value="Create"/>
    </form>
</div>
</body>
</html>