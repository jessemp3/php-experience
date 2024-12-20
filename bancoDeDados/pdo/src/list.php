<?php

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'select * from users';


echo '<h3>Users</h3>';

foreach ($pdo->query($sql) as $key => $value) {
    echo 'Id: ' . $value['id'] . '<br>Nome: ' . $value['nome'] . '<br>Email: ' . $value['email'] . '<hr>';
}
?>