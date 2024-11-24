<?php
// Connexion à la base de données SQLite
$db = new SQLite3('actufric.db');

// Création de la table des utilisateurs (si elle n'existe pas)
$query = "CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    phone_number TEXT NOT NULL,
    password TEXT NOT NULL,
    points INTEGER DEFAULT 0
)";
$db->exec($query);

// Connexion à la base de données SQLite
$db = new SQLite3('actufric.db');

// Ajouter la colonne 'points' si elle n'existe pas
$query = "ALTER TABLE users ADD COLUMN points INTEGER DEFAULT 0";
$db->exec($query);
?>