<?php

class Product
{
    public int $id;
    public string $nomProduit;
    public float $prix;
    public int $stock;


    public function __construct($id, $nomProduit, $prix, $stock)
    {
        $this->id = $id;
        $this->nomProduit = $nomProduit;
        $this->prix = $prix;
        $this->stock = $stock;
    }
}
