<!-- final_page.php -->
<?php
$info = $_POST['info'] ?? '';
setcookie("user_data[info]", $info, time() + 3600);

// Récupérer les données stockées dans le cookie
$user_data = $_COOKIE['user_data'] ?? [];
$email = $user_data['email'] ?? 'Non spécifié';
$password = $user_data['password'] ?? 'Non spécifié';
$info = $user_data['info'] ?? 'Non spécifié';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Données Finales</title>
</head>
<body>
    <h1>Données Enregistrées</h1>
    <ul>
        <li>Email : <?php echo htmlspecialchars($email); ?></li>
        <li>Mot de passe : <?php echo htmlspecialchars($password); ?></li>
        <li>Information complémentaire : <?php echo htmlspecialchars($info); ?></li>
    </ul>
</body>
</html>
