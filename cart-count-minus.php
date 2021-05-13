<?php
session_start();
foreach ($_SESSION['cart'] as $key => $value) {
    if($value['count'] > 1){
        $value['count'] -= 1;
    }
}
?>