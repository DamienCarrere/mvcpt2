<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>

<body>
    <h1>Add Product</h1>
    <form method="POST">
        <label>Nom du Produit: </label>
        <input type="text" name="nomProduit" required><br>
        <label>Prix: </label>
        <input type="number" name="prix" required><br>
        <label>Stock: </label>
        <input type="text" name="stock" required><br>
        <label>Description: </label>
        <input type="text" name="description" required><br>
        <button type="submit" name="addProduct">Ajouter Produit</button>
    </form>

</body>

</html>