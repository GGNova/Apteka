<?php

    require_once 'connection.php';

    $sectionName = $_POST['sectionName'];

    $sectionPhoto = $_FILES['photo']['name'];

    $folder = 'ICONS/'.$_FILES['photo']['name'];

    move_uploaded_file($_FILES['photo']['tmp_name'], $folder);

    $result = $mysqli->query("INSERT INTO producttype VALUES(NULL, '$sectionName', '$sectionPhoto')");

    header("Location: index.php");

?>