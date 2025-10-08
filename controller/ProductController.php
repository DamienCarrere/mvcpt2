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
        // $product = "test";
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

            $product = new Product(null, $nomProduit, $prix, $stock, $description);

            $this->productDao->addProduct($product);
            header("Location: index.php?page=product&action=showProductList");
            exit;
        }
        require __DIR__ . "/../view/addProductView.php";
    }

    public function updateProductForm()
    {
        $id = $_POST["id"] ?? null;
        $product = $this->productDao->getProductById($id);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nomProduit = $_POST["nomProduit"];
            $prix = $_POST["prix"];
            $stock = $_POST["stock"];
            $description = $_POST["description"];

            $product = new Product($id, $nomProduit, $prix, $stock, $description);

            $this->productDao->updateProduct($product);
            header("Location: index.php?page=product&action=detailProduct&id=$id");
            exit;
        }
        require __DIR__ . "/../view/updateProductView.php";
    }
}
