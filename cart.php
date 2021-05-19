<?php 
session_start(); 
?>
<div class="cart-wind">

  <div class="cart-wind-headline">
    <h4>Корзина</h4>
    <div class="closer-cart"><span class="closer-cart-stick"></span><span class="closer-cart-stick"></span></div>
  </div>

  <div class="cart-wind-content">

    <div class="cart-lines">
      <?php

      require_once 'connection.php';
    if (isset($_SESSION['cart']) && $_SESSION['cart'] != null){
      foreach ($_SESSION['cart'] as $key => $value) {

        $result = mysqli_query($link, "SELECT `ProductName`,`ProductPrice`,`ProductPickture` FROM `product` WHERE ProductId = '$value[id]'");

        $product = mysqli_fetch_assoc($result);

        $count += 1 ;
        
          ?>
      <div class="cart-line">

        <img src="IMG/<?php echo $product['ProductPickture']; ?>" class="cart-product-pick" alt="ERROR 404">

        <div class="cart-line-productInfo">

          <div class="cart-productInfo-name">

            <p>Название товара: <?php echo $product['ProductName'];?> </p>
            <!-- <input type="checkbox" checked class="cart-verify"> -->

          </div>

          <div class="cart-productInfo-price">
            <p>Цена за штуку: <?php echo $product['ProductPrice'];?> руб. </p>
          </div>

          <!-- Счётчик -->
          <div class="cart-productInfo-counter">
            <?php if ($value['count'] > 1) {
              ?>
              <a href="cart-count-minus.php?count=<?php echo $value['count'];  ?>&arrId=<?php echo $key; ?>"><img src="ICONS/minus.svg" alt="-" class="cart-minus"></a>
              <?php
            }else{
              ?>
              <a href="#"><img src="ICONS/minus.svg" alt="-" class="cart-minus"></a>
              <?php
            }
            ?>
            <div class="count-window">
              <p clas="cart-counter-num"><?php echo $value['count']; ?></p>
            </div>
            <a href="cart-count-plus.php?count=<?php echo $value['count'];  ?>&arrId=<?php echo $key; ?>"><img src="ICONS/plus.svg" alt="+" class="cart-plus"></a>
          </div>

          <div class="cart-productInfo-btns">
            <a href="drop-cartElem.php?arrId=<?php echo $key; ?>" class="cart-btns-remove">Удалить из корзины</a>
          </div>
        </div>
          </div>
      <?php 
        $TotalPrice += $product["ProductPrice"] * $value['count'];

      }
      ?>

      <?php
    }else{
      echo '<p class="empty-cart">Корзина пуста</p>';
    }
    ?>
    </div>
    <?php
    if(isset($_SESSION['cart']) && $_SESSION['cart'] != null){
      ?>
      <div class="cart-info">
      <p>Количество товаров: <?php echo $count; ?></p>
      <p>Итого: <?php echo $TotalPrice; ?> руб.</p>
      <a href="buyAllFromCart.php?price=<?php echo $TotalPrice; ?>"><button class="cart-info-order">Оформить заказ</button></a>
      <a href="dropCart.php"><button class="cart-info-dropCart">Отчистить корзину</button></a>
    </div>
    <?php
    }
    ?>

    
  </div>
</div>