<?php
    require_once  __DIR__ . '/../Model/Database.php';

    class UserModel{
        public function getUser(int $limit):array{
            return $this->select($limit);
        }
    }
?>