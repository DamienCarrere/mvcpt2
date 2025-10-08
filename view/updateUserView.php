<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>

<body>
    <h1>Update User</h1>
    <form method="POST">
        <label for="nom">Nom de l'utilisateur: </label>
        <input type="text" name="nom" value="<?= $user->nom ?>" required><br>
        <label for="prenom">Prénom de l'utilisateur: </label>
        <input type="text" name="prenom" value="<?= $user->prenom ?>" required><br>
        <label for="age">Âge: </label>
        <input type="number" name="age" value="<?= $user->age ?>" required><br>
        <button type="submit" name="updateUser">Appliquer les modifications</button>
    </form>
</body>

</html>