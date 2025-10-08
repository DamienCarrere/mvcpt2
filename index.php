<?php

require_once __DIR__ . "/controller/UserController.php";
require_once __DIR__ . "/controller/ProductController.php";
require_once __DIR__ . "/model/dao/UserDAO.php";
require_once __DIR__ . "/model/dao/ProductDAO.php";

require_once "Database.php";

$pdo = Database::getConnection();
$page = $_GET["page"] ?? "user";
$action = $_GET["action"] ?? "showUser";

switch ($page) {

    case "user":
        $userDao = new UserDAO($pdo);
        $users = $userDao->getAllUsers();
        $controller = new UserController($userDao);
        switch ($action) {
            case "showUser":
                $controller->showUser();
                break;
            case "detailUser":
                $controller->showUserById();
                break;
            case "deleteUser":
                $controller->deleteUserById();
                break;
        }
        break;

    case "product":
        $productDao = new ProductDAO($pdo);
        $products = $productDao->getAllProducts();
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
            case "deleteProduct":
                $controller->deleteProductById();
                break;
            case "addProduct":
                $controller->addProductForm();
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


// ajouter un bouton supprimer produit et supprimer utilisateur (dans la base de données)
// besoin action et id dans l'url
// méthode dans controleur
// méthode dans DAO
