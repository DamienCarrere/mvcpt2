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
}
