<?php


require_once __DIR__ . '/../model/Product.php';


class ProductController
{
    public $productDao;

    public function __construct($productDao)
    {
        $this->productDao = $productDao;
    }

    public function showProduct()
    {
        $product = new Product(1, "Wahid Sauvage", 854, 1, "Un simple Wahid capturé dans une salle de classe");
        require __DIR__ . "/../view/productView.php";
    }


    public function showProducts()
    {
        $products = $this->productDao->getAllProducts();
        // $user = "test";
        require __DIR__ . "/../view/productListView.php";
    }

    public function showProductById()
    {
        $id = $_GET["id"] ?? null;
        $product = $this->productDao->getProductById($id);
        require __DIR__ . "/../view/ProductByIdView.php";
    }

    public function deleteProductById()
    {
        $id = $_GET["id"] ?? null;
        $this->productDao->deleteProduct($id);
        header("Location: index.php?page=product&action=showProductList");
        exit;
    }

    public function addProductForm()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nomProduit = $_POST["nomProduit"];
            $prix = $_POST["prix"];
            $stock = $_POST["stock"];
            $description = $_POST["description"];

            $this->productDao->addProduct($nomProduit, $prix, $stock, $description);
        }
        require __DIR__ . "/../view/addProductView.php";
    }
}
