<?php
$a = 10;
function  soma() {
    global $a; //global é uma palavra reservada que pega a variável de fora da função
    $x = 90 + $a;
    echo $x;
    }

    soma()
 ?>