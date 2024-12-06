<?php
include('db.php');
session_start();

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Chercher l'utilisateur dans la base de données
    $sql = "SELECT * FROM users WHERE phone = '$phone'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Vérifier si le mot de passe correspond
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];  // Démarrer la session
            header("Location: dashboard.php");   // Rediriger vers le tableau de bord
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Utilisateur non trouvé.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Actu fric</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Formulaire de connexion -->
    <section class="form-container">
        <h2>Se connecter</h2>
        <form action="login.php" method="POST">
            <label for="phone">Numéro de téléphone :</label>
            <input type="text" id="phone" name="phone" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Se connecter</button>
        </form>

        <p>Pas encore de compte ? <a href="register.php">S'inscrire ici</a></p>
    </section>

</body>
</html>
