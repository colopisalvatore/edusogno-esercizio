<?php
session_start();
include __DIR__.'/config.php';

if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['password'])){
    register($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['password'], $conn);
}else{
    header("Location: ../../registration.php");
    session_destroy();
}

function register($name, $surname, $email, $password, $conn)
{
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO `utenti` (`nome`, `cognome`, `email`, `password`) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $surname, $email, $hashed_password);

    $stmt->execute();
    $stmt->close();

    $_SESSION['succes_message'] = 'La registrazione è andata a buon fine! Reinserisci le tue credenziali per visualizzare i tuoi eventi.';
    
    header("Location: ../../login.php");
}
