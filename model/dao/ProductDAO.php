<?php

class ProductDAO
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllProducts()
    {
        $query = "SELECT * FROM `products`";
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        // $dataProduct = $statement->fetchAll(PDO::FETCH_OBJ);
        $dataProduct = $statement->fetchAll(PDO::FETCH_ASSOC);

        $products = [];
        foreach ($dataProduct as $product) {
            // $product = new Product($product->id, $product->nomProduit, $product->prix, $product->stock);
            $product = new Product($product["id"], $product["nomProduit"], $product["prix"], $product["stock"]);
            $products[] = $product;
        }
        return $products;
    }
}
