<?php
    $bool = true && false;
    var_dump($bool); // bool(false)

    $bool = true || false;
    var_dump($bool); // bool(true)

    $bool = !false;
    var_dump($bool); // bool(false)
?>