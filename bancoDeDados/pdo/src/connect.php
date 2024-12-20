<?php

declare(strict_types=1);

$pdo = null;
//fazendo a conexão com o banco de dados
try {
    $pdo = new PDO('mysql:host=localhost:3306;dbname=phpClass', 'root', 'root');
    echo 'Conexão realizada com sucesso';
}catch (Exception $e){
    echo $e->getMessage();
    die();
}


return $pdo;

//