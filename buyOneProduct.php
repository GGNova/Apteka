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
    require_once 'connection.php';
    require_once 'header.php';
    ?>
    <div class="content">
        <? require_once 'sections.php'; ?>
        <div class='buyOne-block'>
            <h2>Приобрести товар</h2>
            <form method="POST" class="buyOne-form" action="">
                <input type="text" name="place" placeholder="Укажите адрес доставки">
            </form>
        </div>
    </div>
    <div class="footer">
        <? require_once 'footer.php'; ?>
    </div>
</div>
</body>
</html>