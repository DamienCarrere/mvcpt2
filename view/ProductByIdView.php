<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail</title>
</head>

<body>
    <h1>Détail</h1>

    <p>Nom du produit: <?= htmlspecialchars($product->nomProduit) ?></p>
    <p>Prix: <?= htmlspecialchars($product->prix) ?>€</p>
    <p>Stock restant: <?= htmlspecialchars($product->stock) ?></p>
    <p>Description: <?= htmlspecialchars($product->description) ?></p>
    <br>
    <a href="index.php?page=product&action=updateProduct&id=<?= $product->id ?>">Modifier produit</a>
    <br>
    <a href="index.php?page=product&action=deleteProduct&id=<?= $product->id ?>">Supprimer produit</a>
    <br>

    <a href="index.php?page=product&action=showProductList">Retourner à la liste des produits</a>
</body>

</html>