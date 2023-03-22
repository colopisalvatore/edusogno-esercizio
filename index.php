<!DOCTYPE html>
<html lang="en">
<?php include __DIR__.'./assets/partials/head.php'; ?>

<body>
    <?php 
    session_start();
    include __DIR__.'./assets/partials/header.php';
    include __DIR__.'./assets/partials/config.php';
    include __DIR__.'./assets/partials/function.php';

    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit;
    }

    // Richiama la funzione getEvents e assegna il risultato alla variabile $events
    $events = getEvents($conn);
    ?>
    <section id="events">
    <main>
        <h1>Ciao <span class="username"><?php echo $_SESSION['user_name']; ?></span> ecco i tuoi eventi</h1>

        <div class="eventsRow">
            <?php if ($events): ?>
                <?php foreach($events as $event): ?>
                    <div class="single-event">
                        <h2><?php echo $event['nome_evento']; ?></h2>
                        <p><?php echo $event['data_evento']; ?></p>
                        <button>Join</button>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Nessun evento trovato.</p>
            <?php endif; ?>
        </div>
    </main>
</section>

</body>
</html>
