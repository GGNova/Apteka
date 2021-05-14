<?php 
  session_start();
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

<!-- <script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
function cartMinus() {
  $.get("cart-count-minus.php");
  // return false;
  console.log("LOL")
}

// function cartPlus(){
//   $.get(".php");
//   return false;
// }
</script> -->

<script>
  // Создание переменных 
  let LogInOpener = document.querySelector(".header_LogIn");
  let LogInCloser = document.querySelector(".closer");
  let LogInWindow = document.querySelector(".LogIn-bg");
  let RegOpener = document.querySelector(".LogIn-footer button");
  let RegCloser = document.querySelector(".closer-reg")
  let RegWind = document.querySelector(".registration-bg");
  let CartWind = document.querySelector(".cart-wind-bg");
  let CartWindCloser = document.querySelector(".closer-cart"); 
  let CartWindOpener = document.querySelector(".header_shop-cart");

  // Функция открытия окна входа авторизации
  function LogInOpening(){
    LogInWindow.classList.remove("LogIn-bg");
    LogInWindow.classList.add("LogIn-bg-opened");
  }
  // Функция закрытия окна авторизации
  function LogInClosing(){
    LogInWindow.classList.remove("LogIn-bg-opened");
    LogInWindow.classList.add("LogIn-bg");
  }
  // Добавление слушателей событий для окна авторизации
  console.log(typeof LogInOpener)
  if( LogInOpener != null){
  LogInOpener.addEventListener("click",LogInOpening);
  LogInCloser.addEventListener("click",LogInClosing);
  }

  // Функция открытия окна регистрации
  function RegOpening(){
    LogInClosing();
    RegWind.classList.remove("registration-bg");
    RegWind.classList.add("registration-bg-opened");
  }
  // Функция закрытия окна регистрации
  function RegClosing(){
    RegWind.classList.remove("registration-bg-opened");
    RegWind.classList.add("registration-bg");
  }



  RegOpener.addEventListener("click",RegOpening);
  RegCloser.addEventListener("click",RegClosing);


  function CartOpening(){
    console.log(CartWind);
    CartWind.classList.remove("cart-wind-bg");
    CartWind.classList.add("cart-wind-bg-opened");
    console.log(CartWind);
      }

  function CartClosing(){
    CartWind.classList.remove("cart-wind-bg-opened");
    CartWind.classList.add("cart-wind-bg");
  }

  CartWindOpener.addEventListener("click",CartOpening);
  CartWindCloser.addEventListener("click",CartClosing);


</script>
</body>
</html>