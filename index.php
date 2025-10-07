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
$action = $_GET["action"] ?? "showUser";

switch ($page) {

    case "user":
        $controller = new UserController($userDao);
        switch ($action) {
            case "showUser":
                $controller->showUser();
                break;
            case "detailUser":
                $controller->showUserById();
                break;
        }
        break;

    case "product":
        $controller = new ProductController($productDao);
        switch ($action) {
            case "showProductDetail":
                $controller->showProduct();
                break;
            case "showProductList":
                $controller->showProducts();
                break;
            case "detailProduct":
                $controller->showProductById();
                break;
        }
        break;

    default:
        echo "ERROR 404<br>Page Not Found";
        break;
}


// case "detailUser":
//     $controller = new UserController($userDao);
//     $controller->showUserById();
//     break;