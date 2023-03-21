<!DOCTYPE html>
<html lang="en">
<?php include './assets/partials/head.php'; ?>

<body>
    <?php 
    session_start();
    include './assets/partials/header.php';
    
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit;
    }

    ?>
    <section id="events">
    <main>
        <h1>Ciao <span class="username">Nome Utente</span> ecco i tuoi eventi</h1>

        <div class="eventsRow">
                <div class="single-event">
                    <h2> Nome Evento </h2>
                    <p> Data Evento </p>
                    <button>Join</button>
                </div>
        </div>
    </main>
</section>

</body>
</html>
