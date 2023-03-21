<?php session_start(); ?>
<header>
    <div class="logo">
        <img id="logo" src="./assets/img/logo.svg" alt="Immagine che rappresenta il logo di Edusogno">
    </div>
    <?php if (isset($_SESSION['user_id'])): ?>
        <span id="logoutButtonContainer">
            <a href="logout.php" class="logout-button">Logout</a>
        </span>
    <?php endif; ?>
</header>
