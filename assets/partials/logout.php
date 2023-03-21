<?php
// Avvia la sessione
session_start();

// Rimuovi tutte le variabili di sessione
$_SESSION = array();

// Distruggi la sessione
session_destroy();

// Reindirizza l'utente alla pagina di login
header("location: ../../login.php");
exit;
?>
