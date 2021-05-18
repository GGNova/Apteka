<?php

    $newName = $_POST['newName'];

    $newIcon = $_FILES['photo']['name'];

    $folder = "ICONS/".$_FILES['photo']['name'];

    move_uploaded_file($_FILES['photo']['tmp_name'], $folder);

    var_dump($newIcon, $newName);

    if(isset($newIcon)){
        echo 'Нет картинки';
        $result = $mysqli -> query("UPDATE producttype SET ProductTypeName = '$newName')");
    }else if($newIcon != ""){
        echo 'Картинка есть';
        $result = $mysqli -> query("UPDATE producttype SET ProductTypeName = '$newName')");
        $result2 = $mysqli -> query("UPDATE producttype SET ProductTypeImage = '$newIcon')");
    }

    // header("Location: index.php");

?>