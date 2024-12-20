<?php

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'insert into users (nome, email , senha) values (?, ?,?)';



$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['nome']);
$prepare->bindParam(2, $_GET['email']);
$prepare->bindParam(3, $_GET['senha']);

$prepare->execute();

echo $prepare->rowCount();

?>

//exemplo de como passar a url
<!--http://localhost:63342/php-experience/bancoDeDados/pdo/src/insert.php?nome=jesse&email=kaique@gmail.com&senha=root%20-->
//