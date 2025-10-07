<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail</title>
</head>

<body>
    <h1>Utilisateur: <?= htmlspecialchars($user->nom) ?> <?= htmlspecialchars($user->prenom) ?></h1>

    <p>Nom: <?= htmlspecialchars($user->nom) ?></p>
    <p>Prénom: <?= htmlspecialchars($user->prenom) ?></p>
    <p>Âge: <?= htmlspecialchars($user->age) ?></p>

    <a href="index.php?page=user&action=showUser">Retourner à la liste des utilisateurs</a>
</body>

</html>