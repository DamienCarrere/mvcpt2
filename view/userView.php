<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateur</title>
</head>

<body>
    <?php foreach ($users as $user): ?>
        <p>Bienvenue <?= htmlspecialchars($user->prenom, ENT_QUOTES, "UTF-8") ?>
            <?= htmlspecialchars($user->nom, ENT_QUOTES, "UTF-8") ?>
        </p>
        <a href="index.php?page=user&action=detailUser&id=<?= $user->id ?>">Détail Utilisateur</a>
        <br>
        <a href="index.php?page=user&action=deleteUser&id=<?= $user->id ?>">Supprimer utilisateur</a>
        <br>
    <?php endforeach ?>
    <p>Ceci est mon petit site complètement légal pour vendre des gens !</p>

    <a href="index.php?page=user&action=addUser">Ajouter un utilisateur</a>
    <br>
    <h4>Vous pouvez naviguer entre les pages ici : </h4>
    <nav>
        <a href="index.php?page=product&action=showProductDetail">Produit</a>
        <br>
        <a href="index.php?page=product&action=showProductList">Liste des produits</a>
    </nav>
</body>

</html>