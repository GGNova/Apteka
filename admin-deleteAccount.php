<?php

$userId = $_GET['id'];

$mysqli = new mysqli('localhost', 'root', 'root', 'apteka');
$delUser = $mysqli->query("DELETE * FROM user WHERE userId='$userId'");

?>