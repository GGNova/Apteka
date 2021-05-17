<?php
$host = 'localhost'; // адрес сервера 
$database = 'apteka'; // имя базы данных
$user = 'root'; // имя пользователя
$password = 'root'; // пароль

$link = mysqli_connect($host, $user, $password, $database);

$mysqli = new mysqli($localhost, $user, $password, $database);

if($link == false){
    echo 'Подключение не выполнено';
}
?>