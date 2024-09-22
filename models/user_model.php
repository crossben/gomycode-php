<?php
// /models/user_model.php 
require_once '../config/database.php';
// Fonction pour vérifier si les identifiants sont corrects 
function verifyUser($email)
{
    $pdo = getDBConnection();
    // Préparer une requête SQL sécurisée pour éviter les injections SQL 
    $sql = 'SELECT * FROM USER2 WHERE email = :email';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    // Exécuter la requête 
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    // Vérification du mot de passe si l'utilisateur est trouvé 
    if ($user) {
        return $user;
    }
    return false;
}
