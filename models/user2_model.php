<?php
// /models/user_model.php 
require_once '../config/database.php';
// Fonction pour vérifier si les identifiants sont corrects 
function verifyUser($nom, $prenom, $email, $password)
{
    $pdo = getDBConnection();
    
    // Préparer une requête SQL sécurisée pour éviter les injections SQL 
    $sql = 'INSERT INTO USER2 (nom, prenom, email, password) VALUES (:nom, :prenom, :email, :password)';

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    // Exécuter la requête 
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    // Vérification du mot de passe si l'utilisateur est trouvé 
    if ($user) {
        return $user;
    }
    // Redirection après l'insertion réussie
    header('Location: ../views/login_view.php');
    return true;
}
