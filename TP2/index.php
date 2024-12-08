<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $nom = htmlspecialchars($_POST['nom'] ?? '');
    $prenom = htmlspecialchars($_POST['prenom']?? '');
    $date_naissance = htmlspecialchars($_POST['date_naissance']?? '');
    $pays_naissance = htmlspecialchars($_POST['pays_naissance']?? '');
    $nationalite = htmlspecialchars($_POST['nationalite']?? '');
?>

<form action="" method="post">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="date_naissance">Date de naissance</label>
        <input type="date" id="date_naissance" name="date_naissance" required>

        <label for="pays_naissance">Pays de naissance</label>
        <input type="text" id="pays_naissance" name="pays_naissance" required>

        <label for="nationalite">Nationalité</label>
        <input type="text" id="nationalite" name="nationalite" required>

        <button type="submit" name="envoie">Envoyer</button>
</form>
<?php

    if (isset($_POST['envoie'])) { ?>

<div>
     <h2>Informations soumises :</h2>
    <p><strong>Nom :</strong><?= $nom; ?> </p>
    <p><strong>Prénom :</strong> <?= $prenom; ?></p>
     <p><strong>Date de naissance :</strong> <?= $date_naissance; ?></p>
    <p><strong>Pays de naissance :</strong><?= $pays_naissance; ?></p>
    <p><strong>Nationalité :</strong> <?= $nationalite; ?></p>
</div>
<?php }
?>
</body>
</html>