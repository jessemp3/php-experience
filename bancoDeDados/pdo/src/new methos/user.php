<?php

declare(strict_types=1);//força a tipagem de dados

class User {

    /**
     * @var PDO
     */
    private $conection;

    public function __construct(){
        try {
            $this->conection = new PDO('mysql:host=localhost:3306;dbname=phpClass', 'root', 'root');
            echo 'Conexão realizada com sucesso' . "<br>";
        }catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

//metodos

public function list():array
{
    $sql = 'select * from users';

    $users = [];


    foreach ($this->conection->query($sql) as $key => $value) {
        array_push($users, $value);
    }
    return $users;
}


    public function insert(string $nome , string $email , string $senha):int
    {
        $sql = 'insert into users (nome, email , senha) values (?, ?,?)';



        $prepare = $this->conection->prepare($sql);

        $prepare->bindParam(1, $nome);
        $prepare->bindParam(2, $email);
        $prepare->bindParam(3, $senha);

        $prepare->execute();

        return $prepare->rowCount();
    }

    public function update(string $nome , int $id):int
    {
        $sql = 'update users set nome = ? where id = ?';


        $prepare = $this->conection->prepare($sql);

        $prepare->bindParam(1, $nome);
        $prepare->bindParam(2, $id);

        $prepare->execute();

        return $prepare->rowCount();

    }


    public function delete(int $id):int
    {
        $sql = 'delete from users where id = ?';

        $prepare = $this->conection->prepare($sql);

        $prepare->bindParam(1, $id);
        $prepare->execute();

        return $prepare->rowCount();

    }


}

//