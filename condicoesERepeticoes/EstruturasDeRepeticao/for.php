<?php
    $array50 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,
                21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,
                38,39,40,41,42,43,44,45,46,47,48,49,50];

$unordenedArray = [5, 3, 8, 1, 9, 2, 7, 4, 6, 5, 3, 8, 1, 9, 2, 7, 4, 6, 10, 10];
echo(sort($unordenedArray));
print_r($unordenedArray);

    $quantidade = count($unordenedArray);
//    echo "Quantidade de elementos: $quantidade . </br>";

    for($i = 0; $i <= $quantidade - 1 ; $i++){
        for($posicaoAtual=0; $posicaoAtual < $quantidade -$i - 1;$posicaoAtual++){


            $proximaPosicao = $posicaoAtual + 1;

            if($unordenedArray[$proximaPosicao] < $unordenedArray[$posicaoAtual]){
                $auxiliar = $unordenedArray[$posicaoAtual];
                $unordenedArray[$posicaoAtual] = $unordenedArray[$proximaPosicao];
                $unordenedArray[$proximaPosicao] = $auxiliar;

            }

        }
    }

//    print_r($unordenedArray);
//
//for($i = 0; $i <= count($array50) ; $i++){
//    echo $i;
//}

//$ordenador = sort($unordenedArray[]);
//echo $ordenador;

//for($i = 0; $i <= $ordenador ; $i++){
////echo $i;
//}

?>