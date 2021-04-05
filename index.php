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
  <?php
    require_once 'connection.php';
    $link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
  ?>
<div class="main">
  <?php
    require_once 'header.php';
  ?>
  <div class="content">
    <?php
      require_once 'sections.php';
    ?>

    <?php
      require_once 'cards.php';
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