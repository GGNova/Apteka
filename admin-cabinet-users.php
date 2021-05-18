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

      <?php
        require_once 'sections.php';
      ?>
      <div class="admin-users">
        <h2>Пользователи</h2>
        <div class="admin-users-window">
          <?php
                $result = mysqli_query($link, "SELECT * FROM user");
                while($user = mysqli_fetch_assoc($result)){
                  $userId = $user['userId'];
                  ?>
          <div class="admin-users-line">
            <img src="ICONS/user-icon.svg">
            <table>
              <tr>
                <td class="admin-userInfo">
                  <h3>ФИО: </h3>
                  <p><?php echo $user['userFIO']; ?> </p>
                </td>
              </tr>
              <tr>
                <td class="admin-userInfo">
                  <h3>Логин: </h3>
                  <p><?php echo $user['userLog']; ?></p>
                  <h3>Пароль: </h3>
                  <p><?php echo $user['userPas']; ?></p>
                  <h3>Телефон: </h3>
                  <p><?php echo $user['userPhone']; ?></p>
                </td>
              </tr>
              <tr>
                <td>
                  <?php
                          if ($user['userLog'] != 'Bylaranzaa'){
                            ?>
                  <a href="admin-deleteAccount.php?id=<?php echo $user['userId']; ?>">
                    <button class="admin-deleteUser">Удалить Пользователя</button>
                  </a>
                  <?php
                          }
                          ?>
                </td>
              </tr>
            </table>
          </div>

        <?php
              }
            ?>
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