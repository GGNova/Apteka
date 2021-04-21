<?php

require_once 'connection.php';

$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);

$password = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

$mysqli = new mysqli('localhost', 'root', 'root', 'apteka');

$result = $mysqli->query("SELECT * FROM user WHERE userLog = '$login' and userPas = '$password'");

$user = $result->fetch_assoc();

if(count($user) == 0){
    echo 'Такой пользователь не существует';
    exit();
}

setcookie('user', $user['userFIO'], time() + 3600 * 24 * 7, "/");

setcookie('userId', $user['userId'], time() + 3600 * 24 * 7, "/");

$mysqli->close();

header('Location: index.php');

?>