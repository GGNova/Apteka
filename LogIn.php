<?php

error_reporting(E_ALL);

require_once 'connection.php';

$AdminLog = 'Bylaranzaa';

$AdminPas = 'KJeEvK6yUOTYQ5qjSCMc';

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
}else if($login == $AdminLog and $password == $AdminPas) {
    setcookie('admin', $user['userFIO'], time() + 3600 * 24 * 7, "/");
}else{
    setcookie('user', $user['userFIO'], time() + 3600 * 24 * 7, "/");
}

setcookie('userId', $user['userId'], time() + 3600 * 24 * 7, "/");

$mysqli->close();

header('Location: index.php');

?>