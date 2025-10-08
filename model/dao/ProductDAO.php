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
            $product = new Product($product["id"], $product["nomProduit"], $product["prix"], $product["stock"], $product["description"]);
            $products[] = $product;
        }
        return $products;
    }
    public function getProductById($id)
    {
        $query = "SELECT * FROM `products` WHERE id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->execute([":id" => $id]);
        $dataProduct = $statement->fetch(PDO::FETCH_ASSOC);

        if ($dataProduct) {
            return new Product(
                $dataProduct["id"],
                $dataProduct["nomProduit"],
                $dataProduct["prix"],
                $dataProduct["stock"],
                $dataProduct["description"]
            );
        } else {
            return null;
        }
    }

    public function deleteProduct($id)
    {
        $query = "DELETE FROM `products` WHERE id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->execute([":id" => $id]);
    }

    public function addProduct($nomProduit, $prix, $stock, $description)
    {

        $query = "INSERT INTO `products` (nomProduit, prix, stock, description) VALUES (:nomProduit, :prix, :stock, :description)";
        $statement = $this->pdo->prepare($query);
        $statement->execute([":nomProduit" => $nomProduit], [":prix" => $prix], [":stock" => $stock], [":description" => $description]);
    }
}
