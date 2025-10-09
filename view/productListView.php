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
        <p>Nom du produit: <?= htmlspecialchars($product->nomProduit, ENT_QUOTES, "UTF-8") ?> </p>
        <form method="POST" action="index.php?page=product&action=detailProduct">
            <input type="hidden" name="id" value="<?= $product->id ?>">
            <button type="submit">Détail du produit</button>
        </form>
        <br>
        <form method="POST" action="index.php?page=product&action=deleteProduct">
            <input type="hidden" name="id" value="<?= $product->id ?>">
            <button type="submit">Supprimer</button>
        </form>
        <br>
    <?php endforeach; ?>

    <br>
    <form method="POST" action="index.php?page=product&action=addProduct">
        <button type="submit">Ajouter un produit</button>
    </form>
    <h4>Vous pouvez naviguer entre les pages ici : </h4>
    <nav>
        <a href="index.php?page=user&action=showUser">Utilisateur</a>
        <br>
        <a href="index.php?page=product&action=showProductDetail">Produit</a>
    </nav>
</body>

</html>