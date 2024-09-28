<?php
require_once './shared/header.php'; // Added missing semicolon
?>



<?php
// index.php 
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: views/login_view.php'); // Rediriger si l'utilisateur n'est pas connecté 
    exit();
}
?>

<div style="text-align: center; margin-top: 50px;">
    <h1>Bienvenue, <?= htmlspecialchars($_SESSION['user']) ?> !</h1>
    <p>Nom : <?= htmlspecialchars($_SESSION['nom']) ?></p>
    <p>Prénom : <?= htmlspecialchars($_SESSION['prenom']) ?></p>
</div>
<div class="text-center">
    <a class="btn btn-danger my-5" href="./logout.php">Déconnexion</a>
</div>


<?php
require_once './shared/footer.php'; // Added missing semicolon
?>