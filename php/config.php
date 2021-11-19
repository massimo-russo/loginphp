<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "tutorial_mysql";
$connessione = new mysqli($host,$user,$password,$db );
if($connessione === false){
    die("errore connessione: " .$connessione->connect_error);
}
?>