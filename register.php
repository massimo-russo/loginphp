<?php

require_once('config.php');
$username = $connessione->real_escape_string($_POST['username']);
$password = $connessione->real_escape_string($_POST['password']);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO utenti (username, password) VALUES ('$username','$hashed_password')";

if($connessione->query($sql) === true){
    echo "registrazione avvenuta con successo";
}else{
    echo "errore registrazione utente $sql. " . $connessione->error;
}

?>















