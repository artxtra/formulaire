<!-- post_form.php -->
<?php
$email = $_GET['email'] ?? '';
$password = $_GET['password'] ?? '';

// Stockage des données dans un cookie
setcookie("user_data[email]", $email, time() + 3600);
setcookie("user_data[password]", $password, time() + 3600);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire POST</title>
</head>
<body>
    <h1>Bienvenue <?php echo htmlspecialchars($email); ?></h1>
    <p>Mot de passe (enregistré) : <?php echo htmlspecialchars($password); ?></p>
    
    <h2>Ajouter une information (Méthode POST)</h2>
    <form action="final_page.php" method="post">
        <label for="info">Information complémentaire :</label>
        <input type="text" id="info" name="info" required><br><br>
        
        <button type="submit">Soumettre</button>
    </form>
</body>
</html>
