<?php
include('db.php');

// Exemple : Obtenir les informations de l'utilisateur connecté
$userId = 1;  // L'ID de l'utilisateur connecté
$stmt = $db->prepare("SELECT * FROM users WHERE id = :id");
$stmt->bindValue(':id', $userId, SQLITE3_INTEGER);
$result = $stmt->execute();
$user = $result->fetchArray();

if ($user) {
    echo "Bienvenue, " . $user['phone_number'] . " !<br>";
    echo "Vous avez actuellement " . $user['points'] . " points.";
} else {
    echo "Utilisateur non trouvé.";
}
?>