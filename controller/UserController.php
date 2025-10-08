<?php

require_once __DIR__ . "/../model/User.php";

class UserController
{
    public $userDao;

    public function __construct($userDao)
    {
        $this->userDao = $userDao;
    }

    public function showUser()
    {
        // $user = new User("Damien Carrère");
        $users = $this->userDao->getAllUsers();
        // $user = "test";
        require __DIR__ . "/../view/userView.php";
    }
    public function showUserById()
    {
        $id = $_GET["id"] ?? null;
        $user = $this->userDao->getUserById($id);
        require __DIR__ . "/../view/userByIdView.php";
    }

    public function deleteUserById()
    {
        $id = $_GET["id"] ?? null;
        $this->userDao->deleteUser($id);
        header("Location: index.php?page=user&action=showUser");
        exit;
    }

    public function addUserForm()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $age = $_POST["age"];

            $user = new User(null, $nom, $prenom, $age);

            $this->userDao->addUser($user);
            header("Location: index.php?page=user&action=showUser");
            exit;
        }
        require __DIR__ . "/../view/addUserView.php";
    }

    public function updateUserForm()
    {
        $id = $_GET["id"] ?? null;
        $user = $this->userDao->getUserById($id);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $age = $_POST["age"];

            $user = new User($id, $nom, $prenom, $age);

            $this->userDao->updateUser($user);
            header("Location: index.php?page=user&action=showUser");
            exit;
        }
        require __DIR__ . "/../view/updateUserView.php";
    }
}
