<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">  

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--  Main CSS File -->
    <link href="./assets/styles/style.css" rel="stylesheet">

    <!--  Main JS File -->
    <script src="./assets/js/script.js" defer></script>

    <title>Edusogno</title>
</head>
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
