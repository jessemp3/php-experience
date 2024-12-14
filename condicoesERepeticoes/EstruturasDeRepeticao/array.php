<?php
    $arrayAntingo = array(
        "chave" => "valor",
    );//array antigo e asosiativo


$newArray = [
    "chave" => "valor",
];//array novo e asosiativo

$arrayNormal = ["php" , 'typscript']; //array normal
//print_r($arrayNormal);


$enderecoPeesoa = [
    "pessoa1" => ["cep" => "00000-000", "rua" => "Rua 1", "numero" => 1],
    "pessoa2" => ["cep" => "11111-111", "rua" => "Rua 2", "numero" => 2],
    "pessoa3" => ["cep" => "22222-222", "rua" => "Rua 3", "numero" => 3],
];

if(isset($enderecoPeesoa["pessoa1"])) { //isset verifica se a chave existe
    print_r($enderecoPeesoa["pessoa1"]);
}
?>