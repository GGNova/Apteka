<?php
    $mysqli = new mysqli('localhost', 'root', 'root', 'apteka');
    $delUser = $mysqli->query("DELETE FROM user WHERE userId='$_COOKIE[userId]'");
    require_once 'logOut.php';
?>