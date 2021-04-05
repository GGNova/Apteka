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
<!-- Подключение PhP -->
  <?php
    require_once 'connection.php';
    $link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
  ?>
<!-- Основное окно -->
<div class="main">

  <!-- Подсоединение блока header -->
  <?php
    require_once 'header.php';
  ?>

  <!-- Основной блок с контентом -->
  <div class="content">

    <!-- Подсоединение блока секций с типом лекарств -->
    <?php
      require_once 'sections.php';
    ?>
    
    <!-- Подсоединение карточек с товаром -->
    <?php
      require_once 'cards.php';
    ?>
  </div>

 <!-- Блок footer -->
  <div class="footer">
    
    <!-- Подсоединение блока footer -->
    <?php
      require_once 'footer.php';
    ?>
  </div>

</div>
</body>
</html>