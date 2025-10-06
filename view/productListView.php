<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plusieurs produits</title>
</head>

<body>

    <h1>Plusieurs produits</h1>
    <?php foreach ($products as $product): ?>
        <p>Nom du produit: <?= htmlspecialchars($product->nomProduit, ENT_QUOTES, "UTF-8") ?> || Prix:
            <?= htmlspecialchars($product->prix, ENT_QUOTES, "UTF-8") ?>€ || Stock: <?= htmlspecialchars($product->stock, ENT_QUOTES, "UTF-8") ?> unités</p><br>
    <?php endforeach; ?>
    <h4>Vous pouvez naviguer entre les pages ici : </h4>
    <nav>
        <a href="index.php?page=user">Utilisateur</a>
        <br>
        <a href="index.php?page=product">Produit</a>
    </nav>
</body>

</html>