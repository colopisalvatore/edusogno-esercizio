<!DOCTYPE html>
<html lang="en">
<?php include './assets/partials/head.php'; ?>

<body>
    <?php include './assets/partials/header.php'; ?>
    <h1>Hai già un account?</h1>
    <!-- Mostra il messaggio di errore/successo se presente -->
    <?php include './assets/partials/message.php' ?>
    <section class="form">
        <div class="login-form">
        <form method="POST" action="./assets/partials/process-login.php">
            <label for="email">Inserisci l&apos;e-mail:</label>
            <input type="text" id="email" name="email" placeholder="name@example.com" required>
            <div class="password-toggle">
            <label for="password">Inserisci la password:</label>
            <a id="recover" href="password-reset-request.php">Password dimenticata?</a>
                <input type="password" id="password" name="password" placeholder="Scrivila Qui" required>
                <button type="button" onclick="togglePassword()">
                    <i class="fas fa-eye-slash"></i>
                </button>            </div>
            <input type="submit" value="ACCEDI">
        </form>
        <div class="form-actions">
            <a href="registration.php">Non hai ancora un profilo? <strong><u>Registrati</u></strong></a>
        </div>
        </div>
    </section>
</body>
</html>