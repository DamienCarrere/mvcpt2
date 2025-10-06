<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Un seul Produit</title>
</head>

<body>

    <h1>Un seul produit</h1>
    <p>Nom du produit: <?= htmlspecialchars($product->nomProduit, ENT_QUOTES, "UTF-8") ?> || Prix:
        <?= htmlspecialchars($product->prix, ENT_QUOTES, "UTF-8") ?>€
    </p>
    <h4>Vous pouvez naviguer entre les pages ici : </h4>
    <nav>
        <a href="index.php?page=user">Utilisateur</a>
        <br>
        <a href="index.php?page=products">Liste des produits</a>
    </nav>
</body>

</html>