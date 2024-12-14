<?php
    $frutas = ['banana', 'maçã', 'uva', 'morango', 'abacaxi'];

    $contador = count($frutas);


    $i = 0;

    while($i < $contador){
        echo $frutas[$i] . "\n";
        $i++;
    }
?>