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
        <?require_once 'sections.php'; ?>
        <div class="editSection-block">
            <h2>Редактировать секцию</h2>
            <form method="POST" action="admin-completeEditSection.php" class="editSection-form" enctype="multipart/form-data">
                <label for="newName">Старое название секции: <strong><? echo $_GET['name']; ?></strong></label>
                <input type="text" name='newName' placeholder="Введите новое название для секции">
                <br>
                <label for="photo">Старая картинка секции: <img src="ICONS/<? echo $_GET['img']; ?>">загрузите новую, если надо</label>
                <input type="file" name="photo" multiple accept="image/png,image/jpeg,image/bmp, image/svg" class="admin-addProduct-input addProduct-photo" default="">
                <input type="submit" class="editSection-btn">
            </form>
        </div>
    </div>
    <div class="footer">
        <? require_once 'footer.php'; ?>
    </div>
</div>
</body>
</html>