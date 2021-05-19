<?php

    require_once 'connection.php';

    $newName = $_POST['newName'];

    $sectionId = $_POST['productId'];   

    $newIcon = $_FILES['photo']['name'];

    $folder = "ICONS/".$_FILES['photo']['name'];

    move_uploaded_file($_FILES['photo']['tmp_name'], $folder);


    if($newIcon == ""){
        $result = $mysqli -> query("UPDATE producttype SET ProductTypeName = '$newName' WHERE ProductTypeId = '$sectionId'");
    }else if($newIcon != ""){
        $result = $mysqli -> query("UPDATE producttype SET ProductTypeName = '$newName' WHERE ProductTypeId = '$sectionId'");
        $result2 = $mysqli -> query("UPDATE producttype SET ProductTypeImage = '$newIcon' WHERE ProductTypeId = '$sectionId'");
    }

    header("Location: index.php");

?>