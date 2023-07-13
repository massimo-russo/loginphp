<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "php";
$connessione = new mysqli($host,$user,$password,$db);
if($connessione === false){
    die("errore connessione: " .$connessione->connect_error);
}
?>