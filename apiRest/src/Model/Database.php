<?php
class Database {
    public function select(int $limit): array{

        try{
            $users = json_decode(file_get_contents(DATABASE_FILE), true);
            $users = array_slice($users, 0, $limit);
            return $users;
        }catch(Error $e){
            throw new Error('Alguma coisa está errada');
        }
        return false;
    }
}
?>