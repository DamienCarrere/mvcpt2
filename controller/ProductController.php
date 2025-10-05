<?php


require_once __DIR__ . '/../model/Product.php';


class ProductController
{

    public function showProduct()
    {
        $product = new Product("Wahid Sauvage", 854);
        require __DIR__ . "/../view/productView.php";
    }


    public function showProducts()
    {
        $products = [
            new Product("Jordan Voluptueux", 650),
            new Product("Valentin Exquis", 600000),
            new Product("Pierre Somptueux", 284),
            new Product("Carla Sus as Fuck", 485),
            new Product("Brian dans la kitchen", 561)
        ];

        require __DIR__ . "/../view/productListView.php";
    }
}
