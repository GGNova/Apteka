<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="main">
        <?php
            require_once 'connection.php';
            require_once 'header.php';
        ?>
        <div class="content">
            <? require_once 'sections.php'; ?>
            <div class="admin-sections">
                <h2>Все секции товаров</h2>
                <div class="admin-sections-wind">
                    <?php
                        $result = $mysqli->query("SELECT * FROM producttype");

                        while($productType = mysqli_fetch_assoc($result)){
                            ?>
                                <div class="admin-sections-line">
                                    <img src="ICONS/<?php echo $productType['ProductTypeImage']; ?>" alt="err404" class="admin-sections-icon">
                                    <div class="admin-sections-info">
                                        <p>Название: <?php echo $productType['ProductTypeName'] ?></p>
                                        <div class="admin-sections-btns">
                                            <a href="admin-editSection.php?name=<? echo $productType['ProductTypeName']; ?>&img=<? echo $productType['ProductTypeImage']; ?>&id=<? echo $productType['ProductTypeId']; ?>" class="admin-sections-edit">Редактировать</a>
                                            <a href="#" class="admin-sections-delete">Удалить</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="footer">
            <? require_once 'footer.php'; ?>
        </div>
    </div>

</body>

</html>