<?php

require_once __DIR__ . "/controller/UserController.php";
require_once __DIR__ . "/controller/ProductController.php";
require_once __DIR__ . "/model/dao/UserDAO.php";
require_once __DIR__ . "/model/dao/ProductDAO.php";

require_once "Database.php";

$pdo = Database::getConnection();
$userDao = new UserDAO($pdo);
$users = $userDao->getAllUsers();
$productDao = new ProductDAO($pdo);
$products = $productDao->getAllProducts();
$page = $_GET["page"] ?? "user";

switch ($page) {
    case "user":
        // require_once __DIR__ . "/controller/UserController.php";
        $controller = new UserController($userDao);
        $controller->showUser();
        break;

    case "product":
        // require_once __DIR__ . "/controller/ProductController.php";
        $controller = new ProductController($productDao);
        $controller->showProduct();
        break;

    case "products":
        // require_once __DIR__ . "/controller/ProductController.php";
        $controller = new ProductController($productDao);
        $controller->showProducts();
        break;

    default:
        echo "ERROR 404<br>Page Not Found";
        break;
}
