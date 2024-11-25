<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement du formulaire</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        .data {
            margin-bottom: 15px;
        }
        .data label {
            font-weight: bold;
        }
        .data span {
            display: block;
            margin-top: 5px;
            font-style: italic;
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Résultats du formulaire</h1>
        <?php
            // Récupération et sécurisation des données
            $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '<span class="error">Non fourni</span>';
            $prenom = isset($_POST['prénom']) ? htmlspecialchars(trim($_POST['prénom'])) : '<span class="error">Non fourni</span>';
            $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '<span class="error">Non fourni</span>';
            $password = isset($_POST['password']) ? htmlspecialchars(trim($_POST['password'])) : '<span class="error">Non fourni</span>';
            $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '<span class="error">Non fourni</span>';
            $ageAccepted = isset($_POST['formCheck-1']) ? 'Oui' : 'Non';

            // Affichage des données
        ?>
        <div class="data">
            <label>Nom:</label>
            <span><?= $name ?></span>
        </div>
        <div class="data">
            <label>Prénom:</label>
            <span><?= $prenom ?></span>
        </div>
        <div class="data">
            <label>Email:</label>
            <span><?= $email ?></span>
        </div>
        <div class="data">
            <label>Mot de passe:</label>
            <span><?= $password ? str_repeat('*', strlen($password)) : '<span class="error">Non fourni</span>' ?></span>
        </div>
        <div class="data">
            <label>Message:</label>
            <span><?= nl2br($message) ?></span>
        </div>
        <div class="data">
            <label>Âge accepté:</label>
            <span><?= $ageAccepted ?></span>
        </div>
    </div>
</body>
</html>
