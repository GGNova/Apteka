<?php

    $newName = $_POST['newName'];

    $newIcon = $_FILES['photo']['name'];

    $folder = "ICONS/".$_FILES['photo']['name'];

    move_uploaded_file($_FILES['photo']['tmp_name'], $folder);

    var_dump($newIcon);

    if($newIcon = ""){
        $result = $mysqli -> query()
    }

    // $result = $mysqli -> query();

    header("Location: index.php");

?>