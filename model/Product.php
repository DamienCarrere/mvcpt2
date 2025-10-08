<?php

class Product
{
    public ?int $id;
    public string $nomProduit;
    public float $prix;
    public int $stock;
    public string $description;

    public function __construct($id, $nomProduit, $prix, $stock, $description)
    {
        $this->id = $id;
        $this->nomProduit = $nomProduit;
        $this->prix = $prix;
        $this->stock = $stock;
        $this->description = $description;
    }
}
