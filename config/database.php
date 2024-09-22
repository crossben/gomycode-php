<?php
// /config/database.php 

// Fonction pour se connecter à la base de données en utilisant PDO 

function getDBConnection()
{
    $host = 'localhost'; // Hôte de la base de données 
    $dbname = 'ben2'; // Nom de la base de données 
    $username = 'root'; // Nom d'utilisateur MySQL 
    $password = ''; // Mot de passe MySQL (laisser vide si pas de mot de passe) 

    try {
        // Crée une nouvelle connexion PDO 
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // Configuration pour renvoyer des erreurs si des problèmes surviennent 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo 'Erreur de connexion : ' . $e->getMessage();
        die();
    }
}
