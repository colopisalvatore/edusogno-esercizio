<?php
session_start();
include __DIR__.'/config.php';

if (isset($_POST['email'])) {
    sendTemporaryPassword($_POST['email'], $conn);
} else {
    header("Location: ../../password-reset-request.php");
}

function sendTemporaryPassword($email, $conn) {
    $stmt = $conn->prepare("SELECT `id`, `nome`, `email` FROM `utenti` WHERE `email` = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Genera una password temporanea
        $temp_password = bin2hex(openssl_random_pseudo_bytes(4));
        $hashed_password = password_hash($temp_password, PASSWORD_DEFAULT);

        // Aggiorna la password dell'utente nel database
        $stmt = $conn->prepare("UPDATE `utenti` SET `password` = ? WHERE `id` = ?");
        $stmt->bind_param("si", $hashed_password, $user['id']);
        $stmt->execute();

        // Invia la password temporanea all'utente via email
        $to = $user['email'];
        $subject = "Recupero Password";
        $message = "Ciao " . $user['nome'] . ",\n\nLa tua password temporanea è: " . $temp_password . "\n\nSi prega di accedere e cambiare la password il prima possibile.";

        if (mail($to, $subject, $message)) {
            $_SESSION['success_message'] = "La password temporanea è stata inviata al tuo indirizzo email.";
            header("Location: ../../login.php");
        } else {
            $_SESSION['error_message'] = "Si è verificato un errore durante l'invio dell'email. Riprova più tardi.";
            header("Location: ../../password-reset-request.php");
        }

    } else {
        $_SESSION['error_message'] = "Nessun utente trovato con questa email.";
        header("Location: ../../password-reset-request.php");
    }

    $stmt->close();
}
?>
