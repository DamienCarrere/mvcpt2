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
        $product = new Product(1, "Wahid Sauvage", 854, 1);
        require __DIR__ . "/../view/productView.php";
    }


    public function showProducts()
    {
        $products = $this->productDao->getAllProducts();
        // $user = "test";
        require __DIR__ . "/../view/productListView.php";
    }
}
