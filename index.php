<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accedi</title>

<style>


h2{
text-align:center
}

form{
	display:flex;
    flex-direction: column;
    width: 300px;
    border: solid gray 1px;  
    width:25%;  
    border-radius: 2px;  
    margin: 120px auto;  
    background:#CEE6FD;  
    padding: 50px;  

}

body{
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
background-color:#3A93B3;
}
 
form label{
display:block;
font-size: 18px;
}
 
form label.error{
color: red;
}
 
form input{
padding: 10px;
font-size: 16px;
border-radius: 4px;
display:block;
border: 1px solid #ddd;
}

#pulsante{
	padding: 5px;
	font-size: 1.5rem;
	font-family: 'Lato';
	font-weight: 100;
	background: rgb(138, 148, 119);
	color: white;
	border: none #CB3A3D;
	margin-right: 30%;
	margin-left: 30%;
 }
</style>



</head>
<body>
<form action="register.php" method="POST">
<h2>REGISTRATI</h2>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br><br>
    <label for="password">Password:</label>
    <input type="text" name="password" id="password" required ><br><br>
    <input type="submit" id="pulsante" value="Registrati"><br>
    <br>
  <p>Hai un account?<a href="login.html"> Login</a></p>
</form>


</body>
</html>
