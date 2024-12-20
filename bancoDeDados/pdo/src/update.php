<?php

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'update users set nome = ? where id = ?';


$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['nome']);
$prepare->bindParam(2, $_GET['id']);

$prepare->execute();

echo $prepare->rowCount();


//exemplo de como passar a url
//http://localhost:63342/php-experience/bancoDeDados/pdo/src/update.php?nome=kaique alves&id=2

