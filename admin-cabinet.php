<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
    <div class="main">

        <?php
            require_once 'header.php';
        ?>

        <div class="content">

            <?php
                require_once 'sections.php';
            ?>

            <div class='user-cabinet-main'>  
                <div class="user-cabinet-profile">
                    <h2>Профиль</h2>
                    <div class='logOut'>
                        <a href="logOut.php">
                        <div class="logOut-icon"></div>
                        <a href="logOut.php"><p>Выйти из аккаунта</p></a>
                    </div>
                </div>
                <div class="cabinet-adminPanel">
                    <h2>Панель администрирования</h2>
                    <div class="adminPanel-window">
                        <a href="admin-cabinet-users.php">Пользователи</a>
                        <div class="adminPanel-window-divider"></div>
                        <a href="#">Заказы</a>
                        <div class="adminPanel-window-divider"></div>
                        <a href="admin-sections.php">Секции</a>
                        <div class="adminPanel-window-divider"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <?php
                require_once 'footer.php';
            ?>
        </div>

    </div>
</body>
</html>