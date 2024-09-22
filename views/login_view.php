<?php
require_once '../shared/header.php';
?>

<main>
    <div class="container">
        <h2 class="mt-5">Formulaire de connexion</h2>
        <!-- Affichage des erreurs -->
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>

        <!-- Formulaire de connexion -->
        <form action="../controllers/login_controller.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Adresse email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Connexion</button>
        </form>
    </div>
</main>

<?php
require_once '../shared/footer.php';
?>