<?php

$page = $_GET["page"] ?? "user";

switch ($page) {
    case "user":
        require_once __DIR__ . "/controller/UserController.php";
        $controller = new UserController();
        $controller->showUser();
        break;

    case "product":
        require_once __DIR__ . "/controller/ProductController.php";
        $controller = new ProductController();
        $controller->showProduct();
        break;

    case "products":
        require_once __DIR__ . "/controller/ProductController.php";
        $controller = new ProductController();
        $controller->showProducts();
        break;

    default:
        echo "ERROR 404<br>Page Not Found";
        break;
}
$id = 2;

$pdo = new PDO("mysql:host=localhost;dbname=commevousvoulez;", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = "SELECT * FROM `user` WHERE id=:id";
$statement = $pdo->prepare($query);
$statement->execute([":id" => $id]);
$dataUser = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($dataUser);
