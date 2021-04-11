<?php

setcookie('user', $user['userFIO'], time() - 3600 * 24 * 7, "/");

header('Location: index.php');

?>