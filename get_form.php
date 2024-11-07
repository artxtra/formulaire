<!-- get_form.php -->
<?php
$name = $_GET['name'] ?? 'inconnu';
$age = $_GET['age'] ?? 'inconnu';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire GET</title>
</head>
<body>
    <h1>Bonjour <?php echo htmlspecialchars($name); ?>, âge : <?php echo htmlspecialchars($age); ?></h1>
    
    <h2>Formulaire de Connexion (Méthode GET)</h2>
    <form action="post_form.php" method="get">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
