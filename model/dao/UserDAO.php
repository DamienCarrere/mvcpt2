<?php

class UserDAO
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllUsers()
    {
        $query = "SELECT * FROM `user`";
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        // $dataUser = $statement->fetchAll(PDO::FETCH_OBJ);
        $dataUser = $statement->fetchAll(PDO::FETCH_ASSOC);

        $users = [];
        foreach ($dataUser as $user) {
            // $user = new User($user->id, $user->nom, $user->prenom, $user->age);
            $user = new User($user["id"], $user["nom"], $user["prenom"], $user["age"]);
            $users[] = $user;
        }
        return $users;
    }

    public function getUserById($id)
    {
        $query = "SELECT * FROM `user` WHERE id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->execute([":id" => $id]);
        $dataUser = $statement->fetch(PDO::FETCH_ASSOC);

        if ($dataUser) {
            return new User(
                $dataUser["id"],
                $dataUser["nom"],
                $dataUser["prenom"],
                $dataUser["age"]
            );
        } else {
            return null;
        }
    }

    public function deleteUser($id)
    {
        $query = "DELETE FROM `user` WHERE id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->execute([":id" => $id]);
    }
}
