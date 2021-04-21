<div class="header">
  <a href="index.php" class="Logo"></a>
  <input type="search" class="Search-Box" placeholder="Найти нужное лекарство"></input>
  <?php
    if($_COOKIE['user'] == '' ):
  ?>
  <button class="header_LogIn">Войти</button>
  <?php else: ?>
  <button class="header-cabinet"><a href="user-cabinet.php">Личный кабинет</a></button>
  <?php endif; ?>
  <button class="header_shop-cart"></button>
</div>
