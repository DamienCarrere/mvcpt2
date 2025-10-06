<?php


class Database
{

    private static ?PDO $pdo = null;

    public static function getConnection()
    {
        if (self::$pdo === null) {
            self::$pdo = new PDO("mysql:host=localhost;dbname=commevousvoulez;", "root", "");
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$pdo;
    }
}
// $id = 2;
// $query = "SELECT * FROM `user` WHERE id=:id";
// $statement = $pdo->prepare($query);
// $statement->execute([":id" => $id]);
// $dataUser = $statement->fetchAll(PDO::FETCH_OBJ);

// var_dump($dataUser);
