<?php

    require_once 'connection.php';

    $link = mysqli_connect($host, $user, $password, $database)
    or die('Error' . mysqli_error($link));

    $FIO = filter_var(trim($_POST['userRegFIO']),
    FILTER_SANITIZE_STRING);

    $login = filter_var(trim($_POST['userRegLogin']),
    FILTER_SANITIZE_STRING);

    $password = filter_var(trim($_POST['userRegPassword']),
    FILTER_SANITIZE_STRING);

    $phone = filter_var(trim($_POST['userRegPhone']),
    FILTER_SANITIZE_STRING);
    
    if(mb_strlen($login) < 5 || mb_strlen($login) >20){
        echo"Недопустимая длина логина";
        exit();
    }else if (mb_strlen($FIO) < 1 || mb_strlen($FIO) > 90){
        echo"Недопустимая длина имени";
        exit();
    }else if (mb_strlen($password) < 6 || mb_strlen($password) > 20){
        echo"Недопустимая длина пароля";
        exit();
    }else if (mb_strlen($phone)  != 11){
        echo"Недопустимая длина телефона";
        exit();
    }
    
    $mysqli = new mysqli("localhost","root","root","apteka");

    $query = "SELECT userLog FROM user WHERE userLog = '$login' LIMIT 1";

    $result = mysqli_query($link, $query) or die("ERROR" . mysqli_error($link));

    if(mysqli_num_rows($result)){
        echo 'Пользователь с таким ником уже существует';
        exit();
    }else if(mysqli_num_rows($mysqli->query("SELECT userPhone FROM user WHERE userPhone = '$phone' LIMIT 1"))){
        echo 'Данный номер телефона уже зарегестрирован';
        exit();
    }else{
        $mysqli->query("INSERT INTO user VALUES(NULL,'$FIO', '$login', '$password', '0', '$phone')");

        $mysqli->close();
    
        header('Location: index.php');
    }
?>