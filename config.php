<?php
  // definizione delle costanti per la connessione al database
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', 'root');
  define('DB_NAME', 'users');

  // tentativo di connessione al database MySQL
  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

  // verifica della connessione
  if($conn === false){
    die("Errore di connessione al database: " . mysqli_connect_error());
  }
?>
