<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateur</title>
</head>

<body>
    <?php foreach ($users as $user): ?>
        <p>Bienvenue <?= htmlspecialchars($user->prenom, ENT_QUOTES, "UTF-8") ?> <?= htmlspecialchars($user->nom, ENT_QUOTES, "UTF-8") ?></p>
        <p>Vous avez <?= htmlspecialchars($user->age, ENT_QUOTES, "UTF-8") ?> ans</p><br>
    <?php endforeach ?>
    <p>Ceci est mon petit site complètement légal pour vendre des gens !</p>
    <h4>Vous pouvez naviguer entre les pages ici : </h4>
    <nav>
        <a href="index.php?page=product">Produit</a>
        <br>
        <a href="index.php?page=products">Liste des produits</a>
    </nav>
</body>

</html>