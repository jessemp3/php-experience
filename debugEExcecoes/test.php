<?php
    function f1(){
        echo "f1 está antes da exceção </br>";
    }

    function f2($int) {
        if(!is_int($int)){
            throw new Exception("O valor não é um inteiro");
        }else{
            echo "O valor é um inteiro </br>";
        }

        f3();
    }

    function f3(){
        echo "f3 está depois da exceção </br>";
    }

    f1();
    f2(int:1);//para passar o argumento , precisa referenciar o nome do argumento antes e depois de dois pontos o valor
?>