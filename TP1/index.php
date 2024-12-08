<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 600px;
            margin: auto;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input, select, textarea, button {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer et sécuriser les données
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $date_naissance = htmlspecialchars($_POST['date_naissance']);
    $pays_naissance = htmlspecialchars($_POST['pays_naissance']);
    $nationalite = htmlspecialchars($_POST['nationalite']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $diplome = htmlspecialchars($_POST['diplome']);
    $numero_pole_emploi = htmlspecialchars($_POST['numero_pole_emploi']);
    $nombre_badge = htmlspecialchars($_POST['nombre_badge']);
    $liens_codecademy = htmlspecialchars($_POST['liens_codecademy']);
    $super_hero = htmlspecialchars($_POST['super_hero']);
    $hack = htmlspecialchars($_POST['hack']);
    $experience = htmlspecialchars($_POST['experience']);

    // Afficher les données soumises
    echo "<div>";
    echo "<h2>Informations soumises :</h2>";
    echo "<p><strong>Nom :</strong> $nom</p>";
    echo "<p><strong>Prénom :</strong> $prenom</p>";
    echo "<p><strong>Date de naissance :</strong> $date_naissance</p>";
    echo "<p><strong>Pays de naissance :</strong> $pays_naissance</p>";
    echo "<p><strong>Nationalité :</strong> $nationalite</p>";
    echo "<p><strong>Adresse :</strong> $adresse</p>";
    echo "<p><strong>Email :</strong> $email</p>";
    echo "<p><strong>Téléphone :</strong> $telephone</p>";
    echo "<p><strong>Diplôme :</strong> $diplome</p>";
    echo "<p><strong>Numéro Pôle Emploi :</strong> $numero_pole_emploi</p>";
    echo "<p><strong>Nombre de badges :</strong> $nombre_badge</p>";
    echo "<p><strong>Liens Codecademy :</strong> $liens_codecademy</p>";
    echo "<p><strong>Si vous étiez un super héros/une super héroïne :</strong> $super_hero</p>";
    echo "<p><strong>Votre hack :</strong> $hack</p>";
    echo "<p><strong>Expérience en programmation/informatique :</strong> $experience</p>";
    echo "</div>";
} else {
    // Afficher le formulaire
    ?>


    <h1>Formulaire d'inscription</h1>
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

        <label for="adresse">Adresse</label>
        <input type="text" id="adresse" name="adresse" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="telephone">Téléphone</label>
        <input type="tel" id="telephone" name="telephone" required>

        <label for="diplome">Diplôme</label>
        <select id="diplome" name="diplome" required>
            <option value="">-- Sélectionnez --</option>
            <option value="sans">Sans</option>
            <option value="bac">Bac</option>
            <option value="bac+2">Bac+2</option>
            <option value="bac+3">Bac+3 ou supérieur</option>
        </select>

        <label for="numero_pole_emploi">Numéro Pôle Emploi</label>
        <input type="text" id="numero_pole_emploi" name="numero_pole_emploi">

        <label for="nombre_badge">Nombre de badges</label>
        <input type="number" id="nombre_badge" name="nombre_badge" min="0">

        <label for="liens_codecademy">Liens Codecademy</label>
        <input type="url" id="liens_codecademy" name="liens_codecademy">

        <label for="super_hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
        <textarea id="super_hero" name="super_hero" rows="4" required></textarea>

        <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
        <textarea id="hack" name="hack" rows="4" required></textarea>

        <label for="experience">Avez-vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
        <textarea id="experience" name="experience" rows="4" required></textarea>

        <button type="submit">Envoyer</button>
    </form>
    <?php
}
?>
</body>
</html>
