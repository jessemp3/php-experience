<?php
    $num1 = 1;
    $num2 = 2;
    $num3 = 3;

//    if($num3 > $num2 && $num1 > $num2){
//        echo "O número 3 é o maior número";
//    }else{
//        echo "O número 1 é o maior número";
//    }


//elseIf
//    if($num2 == 1){
//        echo "O número 2 é igual a 1";
//    }elseif ( $num2 == 2){
//        echo "O número 2 é igual a 2";
//    }else{
//        echo "O número 2 é diferente de 1 e 2";
//    }

//switch
switch ($num3){
    case 1:
        echo "O número 1 foi selecionado";
        break;
    case 2:
        echo "O número 2 foi selecionado";
        break;
    case 3:
        echo "O número 3 foi selecionado";
        break;
    default:
        echo "Nenhum número foi selecionado";
        break;
}

?>