<?php
session_start();
if(!isset($_SESSION['loggato']) || $_SESSION['loggato'] !==true){
    header("location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area privata</title>
</head>
<body>
    <h1>Area Privata</h1>
    <?php
    echo "ciao " .$_SESSION["username"]. " benvenuto nella tua pagina personale ";
    ?>
<a href="login.html">Disconnetti</a>
</body>
</html>