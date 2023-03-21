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
    include './assets/partials/header.php'; 
    include './assets/db/config.php';
    
    ?>
    <h1>Hai già un account?</h1>
    <section class="form">
        <div class="login-form">
            <form method="POST" action="./assets/partials/register.php">
                <label for="name">Inserisci il Nome:</label>
                <input type="text" id="name" name="name" placeholder="Mario" required>
                <label for="surname">Inserisci il Cognome:</label>
                <input type="text" id="surname" name="surname" placeholder="Rossi" required>
                <label for="email">Inserisci l&apos;e-mail:</label>
                <input type="text" id="email" name="email" placeholder="name@example.com" required>
                <div class="password-toggle">
                <label for="password">Inserisci la password:</label>
                    <input type="password" id="password" name="password" placeholder="Scrivila Qui" required>
                    <button type="button" onclick="togglePassword()">
                        <i class="fas fa-eye-slash"></i>
                    </button>
                </div>
                <input type="submit" value="REGISTRATI">
            </form>
            <div class="form-actions">
                <a href="login.php">Hai già un Account? <strong><u>Accedi</u></strong></a>
            </div>
        </div>
    </section>
</body>
</html>