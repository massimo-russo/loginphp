<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Php</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <h1>Form Login Php</h1>
    <body>
        <!--MANDO I DATI IN MODO SICURO NASCOSTI CON IL METODO POST-->
        <form action="php/register.php" method="POST">
            <h2>Registrati</h2>
            <label for="username">Nome Utente</label>
            <input type="text" name="username" id="username" placeholder="inserisci il nome Utente" required><br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="inserisci la password" required><br>
            <input type="submit" value="invia">
            <p>Hai già un account? <a href="login.html">Accedi</a></p>
       </form>
    </body>
</html>