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
    if (isset($_SESSION['cart'])){
      foreach ($_SESSION['cart'] as $key => $value) {

        $result = mysqli_query($link, "SELECT `ProductName`,`ProductPrice`,`ProductPickture` FROM `product` WHERE ProductId = '$value[id]'");

        $product = mysqli_fetch_assoc($result);

        $count += 1 ;
        
          ?>
          <div class="cart-line">
          <img src="<?php echo $product['ProductPickture']; ?>" class="cart-product-pick" alt="ERROR 404">
          <div class="cart-line-productInfo">
            <div class="cart-productInfo-name">
              <p>Название товара: <?php echo $product['ProductName'];?> </p>
              <input type="checkbox" checked class="cart-verify">
            </div>
            <div class="cart-productInfo-price">
              <p>Цена за штуку: <?php echo $product['ProductPrice'];?> руб. </p>
            </div>
            <div class="cart-productInfo-counter">
              <a href="cart-count-minus.php"><img src="ICONS/minus.svg" alt="ERROR 404" class="cart-minus"></a>
              <div class="count-window">
                <p><?php echo $value['count']; ?></p>
              </div>
              <a href="#"><img src="ICONS/plus.svg" alt="ERROR 404" class="cart-plus"></a>
            </div>
            <div class="cart-productInfo-btns">
              <button class="cart-btns-buyOne">Купить отдельно</button><button class="cart-btns-remove">Удалить из корзины</button>
            </div>
          </div>
          </div>
        <?php 
        $TotalPrice += $product["ProductPrice"] * $value['count'];

      }

    }else{
      echo '<p class="empty-cart">Корзина пуста</p>';
    }
    
      ?>
      </div>
      <div class="cart-info">
        <p>Количество товаров: <?php echo $count; ?></p>
        <p>Итого: <?php echo $TotalPrice; ?> руб.</p>
        <a href="#"><button>Оформить заказ</button></a>
      </div>

      </div>
    </div>