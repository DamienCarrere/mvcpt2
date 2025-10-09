<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>

<body>
    <h1>Update Product</h1>
    <form method="POST" action="index.php?page=product&action=updateProduct">
        <input type="hidden" name="id" value="<?= htmlspecialchars($_POST["id"]) ?>">
        <label for="nomProduit">Nom du Produit: </label>
        <input type="text" name="nomProduit" required><br>
        <label for="prix">Prix: </label>
        <input type="number" name="prix" required><br>
        <label for="stock">Stock: </label>
        <input type="number" name="stock" required><br>
        <label for="description">Description: </label>
        <input type="text" name="description" required><br>
        <button type="submit" name="addProduct">Modifier Produit</button>
    </form>

</body>

</html>