<?php
include('db.php');

// Traitement de l'inscription
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    
    // Vérification si l'utilisateur existe déjà
    $stmt = $db->prepare("SELECT * FROM users WHERE phone_number = :phone");
    $stmt->bindValue(':phone', $phone, SQLITE3_TEXT);
    $result = $stmt->execute();
    if ($result->fetchArray()) {
        echo "Ce numéro est déjà inscrit.";
    } else {
        // Insérer l'utilisateur dans la base de données
        $stmt = $db->prepare("INSERT INTO users (phone_number, password) VALUES (:phone, :password)");
        $stmt->bindValue(':phone', $phone, SQLITE3_TEXT);
        $stmt->bindValue(':password', password_hash($password, PASSWORD_DEFAULT), SQLITE3_TEXT);
        $stmt->execute();
        echo "Inscription réussie.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire - Actu fric</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Inscription sur Actu fric</h1>
    </header>

    <section class="form-container">
        <form method="POST">
            <label for="phone">Numéro de téléphone :</label>
            <input type="text" id="phone" name="phone" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">S'inscrire</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Actu fric. Tous droits réservés.</p>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>