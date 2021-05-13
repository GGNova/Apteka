<div class='user-cabinet-main'>  
    <div class="user-cabinet-profile">
        <h2>Профиль</h2>
        <div class='logOut'>
            <a href="logOut.php">
            <div class="logOut-icon"></div>
            <a href="logOut.php"><p>Выйти из аккаунта</p></a>
        </div>
        <div class="user-cabinet-accountInfo">

            <div class="user-cabinet-accountTitle">
                <h4>Ваше ФИО:</h4>
                <div class="user-cabinet-accountText">
                    <a href="#">
                        <p><?php echo $_COOKIE['user'];?></p>
                        <div class="pencil"></div>
                    </a>
                </div>
            </div>
            <div class="user-cabinet-verticalDivider"></div>

            <div class="user-cabinet-accountTitle">
                <h4>Ваш Телефон:</h4>
                <div class="user-cabinet-accountText">
                    <a href="#">
                        <p>
                        <?php 
                            $mysqli = new mysqli('localhost', 'root', 'root', 'apteka');
                            $result = $mysqli->query("SELECT userPhone FROM user WHERE userId='$_COOKIE[userId]'");
                            $userPhone = $result->fetch_assoc();
                            echo $userPhone['userPhone'];
                        ?>
                        </p>
                        <div class="pencil"></div>
                    </a>
                </div>
            </div>
            <div class="user-cabinet-verticalDivider"></div>

            <div class="user-cabinet-accountTitle">
                <h4>Ваш пароль:</h4>
                <div class="user-cabinet-accountText">
                    <a href="#">
                        <div class="dots"></div>
                        <div class="dots"></div>
                        <div class="dots"></div>
                        <div class="dots"></div>
                        <div class="dots"></div>
                        <div class="pencil"></div>
                    </a>
                </div>
            </div>
            <div class="user-cabinet-verticalDivider"></div>

        </div>
    </div>
    <div class="user-cabinet-orders">
        <p>Вскоре вы сможете посмотреть здесь свои заказы.</p>
    </div>
    <div class="user-cabinet-deleteAcc">
        <a href="deleteAccount.php"><button>Удалить аккаунт</button></a>
        <p>Вы можете удалить свою учетную запись без возможности восстановления.<br>
Ваша история заказов будет очищена.</p>
    </div>
</div>