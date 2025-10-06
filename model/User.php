<?php

class User
{
    public int $id;
    public string $nom;
    public string $prenom;
    public int $age;


    public function __construct($id, $nom, $prenom, $age)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }
}
