<?php
    foreach ($_SESSION as $key => $value) {
            $value['count'] += 1;
    }
?>