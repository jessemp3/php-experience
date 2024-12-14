<?php
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


    foreach ($arr as $key => $value) {
        if($value % 2 == 0) {
            continue;
        }

        echo "Chave: $key, Valor: $value <br>";
    }
?>