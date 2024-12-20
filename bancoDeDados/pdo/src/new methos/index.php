<?php

require 'user.php';

$user = new User();


switch ($_GET['action']) {
    case 'list':
        echo '<h3>Users</h3>';
        foreach ($user ->list() as  $value) {
            echo 'Id: ' . $value['id'] . '<br>Nome: ' . $value['nome'] . '<br>Email: ' . $value['email'] . '<hr>';
        }
        break;
    case 'insert':
      $status =  $user->insert('eu ue' , 'jessedev@gmail.com' , 'root');

        if(!$status) {
            echo 'Não foi possivel realizar o cadastro';
            return false;
        }else{
            echo 'Cadastro realizado com sucesso';
        }
        break;
    case 'update':
        $status =  $user->update('gabinha' , '8',);

        if(!$status) {
            echo 'Não foi possivel realizar a atualização';
            return false;
        }else{
            echo 'atualização realizada com sucesso';
        }
        break;
    case 'delete':
        $status =  $user->delete('6');

        if(!$status) {
            echo 'Não foi possivel realizar a exclusão';
            return false;
        }else{
            echo 'exclusão realizada com sucesso';
        }
        break;
}
//