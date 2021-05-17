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

            <?php
                require_once 'admin-cabinet-content.php';
            ?>
        </div>

        <div class="footer">
            <?php
                require_once 'footer.php';
            ?>
        </div>

    </div>
</body>
</html>