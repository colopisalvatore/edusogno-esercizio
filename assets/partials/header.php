<?php session_start(); ?>
<header>
    <div class="logo">
        <a href="./index.php"><img id="logo" src="./assets/img/logo.svg" alt="Immagine che rappresenta il logo di Edusogno"></a>
    </div>
    <?php if (isset($_SESSION['user_id'])): ?>
        <span id="logoutButtonContainer">
            <a href="./assets/partials/logout.php" class="logout-button">Logout</a>
        </span>
    <?php endif; ?>
</header>
