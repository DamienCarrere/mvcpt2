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
        <form method="post">
            <p>Nom du produit: <?= htmlspecialchars($product->nomProduit, ENT_QUOTES, "UTF-8") ?> </p>
            <a href="index.php?page=product&action=detailProduct&id=<?= $product->id ?>">Détail du Produit</a>
            <br>
            <a href="index.php?page=product&action=deleteProduct&id=<?= $product->id ?>">Supprimer produit</a>
            <br>
        <?php endforeach; ?>
        <h4>Vous pouvez naviguer entre les pages ici : </h4>
        <nav>
            <a href="index.php?page=user&action=showUser">Utilisateur</a>
            <br>
            <a href="index.php?page=product&action=showProductDetail">Produit</a>
        </nav>
</body>

</html>