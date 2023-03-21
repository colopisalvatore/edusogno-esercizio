<?php
session_start();
include __DIR__.'/config.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    login($_POST['email'], $_POST['password'], $conn);
} else {
    header("Location: ../../login.php");
    session_destroy();
}

function login($email, $password, $conn)
{
    $stmt = $conn->prepare("SELECT `id`, `nome`, `cognome`, `password` FROM `utenti` WHERE `email` = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['nome'];
            $_SESSION['user_surname'] = $user['cognome'];
            header("Location: ../../index.php");
        } else {
            $_SESSION['message'] = 'La password inserita è errata.';
            header("Location: ../../login.php");
        }
    } else {
        $_SESSION['message'] = 'Nessun utente trovato con questa email.';
        header("Location: ../../login.php");
    }

    $stmt->close();
}
