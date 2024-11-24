<?php
// Ajouter des points à un utilisateur
function addPoints($userId, $points) {
    global $db;
    $stmt = $db->prepare("UPDATE users SET points = points + :points WHERE id = :id");
    $stmt->bindValue(':points', $points, SQLITE3_INTEGER);
    $stmt->bindValue(':id', $userId, SQLITE3_INTEGER);
    $stmt->execute();
}
?>