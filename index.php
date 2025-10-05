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
