<?     
if(session_id() == '') {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Аптека</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!-- Подключение PhP -->
  <?php
    $_SESSION['cart'];

    require_once 'connection.php'; 

  ?>
<!-- Основное окно -->
<div class="main">

  <!-- Окно авторизации -->
  <div class="LogIn-bg">

  <!-- Подсоединение окна авторизации -->
    <?php require_once 'LogIn-window.php'; ?>
  </div>

  <!-- Окно регистрации -->
  <div class="registration-bg">
  <!-- Подсоединение окна регистрации -->
    <?php require_once 'registration.php'; ?>

  </div>

  <!-- Корзина -->
  <div class="cart-wind-bg">
  <?php
    require_once 'cart.php';
  ?>
  </div>

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
    <div class="cards">
    <?php
      require_once 'cards.php';
    ?>
    </div>
  </div>

 <!-- Блок footer -->
  <div class="footer">
    
    <!-- Подсоединение блока footer -->
    <?php
      require_once 'footer.php';
    ?>
  </div>

</div>

<script src="js/script.js"></script>
</body>
</html>