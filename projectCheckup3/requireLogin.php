<?php
session_start();
if (!$_SESSION['isLoggedIn']) {
    header('location: form.php');
}
?>