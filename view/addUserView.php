<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>

<body>
    <h1>Add User</h1>
    <form method="POST">
        <label for="nom">Nom de l'utilisateur: </label>
        <input type="text" name="nom" required><br>
        <label for="prenom">Prénom de l'utilisateur: </label>
        <input type="text" name="prenom" required><br>
        <label for="age">Âge: </label>
        <input type="number" name="age" required><br>
        <button type="submit" name="addUser">Ajouter Utilisateur</button>
    </form>
</body>

</html>