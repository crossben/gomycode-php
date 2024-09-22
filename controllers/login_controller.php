<?php
// /controllers/login_controller.php 

require_once '../models/user_model.php';

// Vérification des données POST soumises 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Appeler le modèle pour vérifier l'utilisateur 
    $user = verifyUser($email, $password);

    if ($user) {
        // Si l'utilisateur est trouvé, démarrer une session 
        session_start();
        $_SESSION['user'] = $user['email'];
        $_SESSION['nom'] = $user['nom'];
        $_SESSION['prenom'] = $user['prenom'];
        header('Location: ../index.php'); // Redirection après la connexion 
    } else {
        // En cas d'échec de la connexion 
        $error = 'Identifiants incorrects';
        require_once '../views/login_view.php';
    }
} else {

    require_once '../views/login_view.php'; // Afficher le formulaire 
}
